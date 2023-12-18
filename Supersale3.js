let selectedColor = '';
let selectedSize = '';
let quantity = 1;
const basePriceElement = document.getElementById('price');

function setColor(color) {
    selectedColor = color;
    document.getElementById('color').innerText = color;
    updatePrice();
    showSelectedColorImage(color);
}

function showSelectedColorImage(color) {
    let slides = document.querySelectorAll('.slider img');
    slides.forEach((img) => {
        if (img.getAttribute('data-color') === color) {
            img.style.display = 'block';
        } else {
            img.style.display = 'none';
        }
    });
}

let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function showSlides(n) {
    let i;
    let slides = document.querySelectorAll('.slider img');

    if (n >= slides.length) {
        slideIndex = 0;
    }
    if (n < 0) {
        slideIndex = slides.length - 1;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex].style.display = "block";
}


function setSize(size) {
    selectedSize = size;
    document.getElementById('size').innerText = size;
    updatePrice();
}

function incrementQuantity() {
    quantity++;
    updatePrice();
}

function decrementQuantity() {
    if (quantity > 1) {
        quantity--;
        updatePrice();
    }
}


class CartItem {
    constructor(name, size, color, img, price) {
        this.name = name;
        this.size = size;
        this.color = color;
        this.img = img;
        this.price = price;
        this.quantity = 1;
    }
}

class LocalCart {
    static key = 'cartItems';

    static getLocalCartItems() {
        let cartMap = new Map();
        const cart = localStorage.getItem(LocalCart.key);
        if (cart === null || cart.length === 0) return cartMap;
        return new Map(Object.entries(JSON.parse(cart)));
    }

    static addItemToLocalCart(id, item) {
        let cart = LocalCart.getLocalCartItems();
        const { name, size, color } = item;

        let found = false;

        for (const [key, cartItem] of cart) {
            if (cartItem.name === name && cartItem.size === size && cartItem.color === color) {
                found = true;
                cartItem.quantity += 1;
                cart.set(key, cartItem);
                break;
            }
        }

        if (!found) {
            cart.set(id, item);
        }

        localStorage.setItem(LocalCart.key, JSON.stringify(Object.fromEntries(cart)));
        updateCartUI();
    }

    static removeItemFromCart(key) {
        let cart = LocalCart.getLocalCartItems();
        if (cart.has(key)) {
            let mapItem = cart.get(key);
            if (mapItem.quantity > 1) {
                mapItem.quantity -= 1;
                cart.set(key, mapItem);
            } else {
                cart.delete(key);
            }
        }
        localStorage.setItem(LocalCart.key, JSON.stringify(Object.fromEntries(cart)));
        updateCartUI();
    }
}

const cartIcon = document.querySelector('.fa-cart-arrow-down');
const wholeCartWindow = document.querySelector('.whole-cart-window');

cartIcon.addEventListener('click', () => {
    wholeCartWindow.classList.toggle('hide');
});

cartIcon.addEventListener('mouseover', () => {
    wholeCartWindow.classList.remove('hide');
});

cartIcon.addEventListener('mouseleave', () => {
    setTimeout(() => {
        if (wholeCartWindow.inWindow === 0) {
            wholeCartWindow.classList.add('hide');
        }
    }, 500);
});

wholeCartWindow.addEventListener('mouseover', () => {
    wholeCartWindow.inWindow = 1;
});

wholeCartWindow.addEventListener('mouseleave', () => {
    wholeCartWindow.inWindow = 0;
    wholeCartWindow.classList.add('hide');
});


function updatePrice() {
    const basePriceElement = document.querySelector('.price[data-id="1"]'); // Adjust 'data-id' accordingly
    const basePrice = parseFloat(basePriceElement.dataset.price);
    const totalPrice = basePrice * quantity;
    document.getElementById('quantity').value = quantity.toString().padStart(2, '0');
    document.getElementById('price').innerText = 'RM' + totalPrice.toFixed(2);
}

let totalCount = 0;
let totalPrice = 0;

function addToCart() {
    if (selectedColor && selectedSize) {
        const cartWrapper = document.querySelector('.cart-wrapper');
        const basePriceElement = document.querySelector('.price[data-id="1"]');
        const basePrice = parseFloat(basePriceElement.dataset.price);
        const price = basePrice * quantity;
        const itemName = document.querySelector('.itemname').textContent;
        const uniqueId = generateUniqueId();

        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.dataset.itemId = uniqueId;

        cartItem.innerHTML = `
            <img src="${itemName}.jpg"> 
            <div class="details">
                <h3>${itemName}</h3>
                <p>
                    <span class="size">Size: ${selectedSize}</span><br>
                    <span class="color">Color: ${selectedColor}</span>
                    <span class="quantity">Quantity: ${quantity}</span>
                    <span class="price">Price: RM ${price.toFixed(2)}</span>
                </p>
            </div>
            <div class="cancel"><i class="fas fa-window-close"></i></div>
        `;

        cartItem.querySelector('.cancel').addEventListener('click', () => {
            const key = cartItem.dataset.itemId;
            LocalCart.removeItemFromCart(key);
            cartWrapper.removeChild(cartItem);
        });

        cartWrapper.append(cartItem);

        totalCount += quantity;
        totalPrice += price;

        const cartIconElement = document.querySelector('.cart-icon');
        const subtotalElement = document.querySelector('.subtotal');

        if (totalCount > 0) {
            cartIconElement.classList.add('non-empty');
            let root = document.querySelector(':root');
            root.style.setProperty('--after-content', `"${totalCount}"`);
            subtotalElement.innerHTML = `SubTotal: RM${totalPrice.toFixed(2)}`;
        } else {
            cartIconElement.classList.remove('non-empty');
            subtotalElement.innerHTML = 'SubTotal: RM0.00';
        }
    } else {
        alert('Please select color and size before adding to cart!');
    }
}

function generateUniqueId() {
    return 'item_' + new Date().getTime();
}

function sendwhatsapp() {
    var phonenumber = "+601111253115";

    if (selectedColor && selectedSize) {
        const cartWrapper = document.querySelector('.cart-wrapper');
        const basePriceElement = document.querySelector('.price[data-id="1"]');
        const basePrice = parseFloat(basePriceElement.dataset.price);
        const price = basePrice * quantity;
        const itemName = document.querySelector('.itemname').textContent;
        const uniqueId = generateUniqueId();

        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.dataset.itemId = uniqueId;

        var url = "https://wa.me/" + phonenumber + "?text="
            + "Item Name : " + itemName + "%0a"
            + "Color : " + selectedColor + "%0a"
            + "Saiz: " + selectedSize + "%0a"
            + "Quantity : " + quantity + "%0a"
            + "Price : " + price + "%0a%0a";

        window.open(url, '_blank').focus();
    } else if (selectedSize) {
        const cartWrapper = document.querySelector('.cart-wrapper');
        const basePriceElement = document.querySelector('.price[data-id="1"]');
        const basePrice = parseFloat(basePriceElement.dataset.price);
        const price = basePrice * quantity;
        const itemName = document.querySelector('.itemname').textContent;
        const uniqueId = generateUniqueId();

        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.dataset.itemId = uniqueId;

        var url = "https://wa.me/" + phonenumber + "?text="
            + "Item Name : " + itemName + "%0a"
            + "Saiz: " + selectedSize + "%0a"
            + "Quantity : " + quantity + "%0a"
            + "Price : " + price + "%0a%0a"
            + "This is an example of send HTML form data to WhatsApp";

        window.open(url, '_blank').focus();
    } else if (selectedColor) {
        const cartWrapper = document.querySelector('.cart-wrapper');
        const basePriceElement = document.querySelector('.price[data-id="1"]');
        const basePrice = parseFloat(basePriceElement.dataset.price);
        const price = basePrice * quantity;
        const itemName = document.querySelector('.itemname').textContent;
        const uniqueId = generateUniqueId();

        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.dataset.itemId = uniqueId;

        var url = "https://wa.me/" + phonenumber + "?text="
            + "Item Name : " + itemName + "%0a"
            + "Color : " + selectedColor + "%0a"
            + "Quantity : " + quantity + "%0a"
            + "Price : " + price + "%0a%0a"
            + "This is an example of send HTML form data to WhatsApp";

        window.open(url, '_blank').focus();
    }else {
        alert('Please select something before adding to cart!');
    }

}


document.addEventListener('DOMContentLoaded', () => {
    updateCartUI();
});



document.addEventListener('DOMContentLoaded', function () {
    const bestSales = document.getElementById('BestSales');
    const superSales = document.getElementById('SuperSales');

    bestSales.addEventListener('mouseenter', function (event) {
        toggleNestedList(event.target);
    });

    superSales.addEventListener('mouseenter', function (event) {
        toggleNestedList(event.target);
    });

    function toggleNestedList(target) {
        const nestedList = target.querySelector('ul');
        if (nestedList) {
            document.querySelectorAll('ul ul').forEach((list) => {
                if (list !== nestedList) {
                    list.style.display = 'none';
                }
            });

            nestedList.style.display = 'block';
        }
    }

    document.querySelector('header').addEventListener('mouseleave', function () {
        document.querySelectorAll('ul ul').forEach((list) => {
            list.style.display = 'none';
        });
    });
});