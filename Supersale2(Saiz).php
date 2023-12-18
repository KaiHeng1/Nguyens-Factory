<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/8f27d68390.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="logo1.css" />
    <link rel="stylesheet" href="Supersale2.css" />
</head>

<body>
    <header>
        <div class="image-logo">
            <a href="homepage.php"><img src="Nguyen'sFactory.jpg" alt="logo"></a>
        </div>
        <a href="homepage.php">
            <h1>Nguyen's Factory</h1>
            <ul>
                <li id="SuperSales">
                    <a href="Supersale.php">Super Sale</a>
                    <ul class="SS">
                        <li>Kid Apparel</li>
                        <li>Adult Apparel</li>
                        <li>Muslim wears and head scarfs</li>
                    </ul>
                </li>

                <li id="BestSales">
                    <a href="BestSales.php">Best Sales</a>
                    <ul class="BS">
                        <li>Hot Kid</li>
                        <li>Hot Adult Apparel</li>
                        <li>Hot Muslim wears and scarf</li>
                    </ul>
                </li>
            </ul>

            <div class="cart-box">
                <div class="cart-icon">
                    <i class="fas fa-cart-arrow-down fa-2x"></i>
                </div>
                <div class="whole-cart-window hide">
                    <h2>Shopping Bag</h2>
                    <div class="cart-wrapper">
                    </div>
                    <div class="subtotal">Subtotal: RM0.00</div>
                    <div class="checkout">Checkout</div>
                    <div class="view-cart"><a href="ViewChart.html">View Cart</a></div>
                </div>
            </div>
        </a>
    </header>

    <section class="product-details">
        <div data-id="1" class="product-details card-item">
            <div class="slider">
                <button class="prev" onclick="plusSlides(-1)">
                    << /button>
                        <img data-color="Red" src="1.jpg" alt="Image 1" />
                        <img data-color="Blue" src="11.jpg" alt="Image 2" />
                        <img data-color="Yellow" src="1.jpg" alt="Image 3" />
                        <img data-color="Black" src="11.jpg" alt="Image 4" />
                        <img data-color="Pink" src="1.jpg" alt="Image 5" />
                        <button class="next" onclick="plusSlides(1)">></button>
            </div>
        </div>
        <h3 class="itemname">1</h3>
        <p>
            <span>
                <h4>Size : <span id="size"></span></h4>
                <button class="btns btn-S" onclick="setSize('S')">S</button>
                <button class="btns btn-M" onclick="setSize('M')">M</button>
                <button class="btns btn-L" onclick="setSize('L')">L</button>
                <button class="btns btn-XL" onclick="setSize('XL')">XL</button>
            </span><br><br>
        <h4>Quantity :</h4>
        <div class="outer-box">
            <div class="minus" onclick="decrementQuantity()"> <button class="minus"> - </button></div>
            <div class="text"><input type="text" class="text" id="quantity" value="01" maxlength="2" size="2"
                    readonly />
            </div>
            <div class="plus" onclick="incrementQuantity()"> <button class="plus"> + </button></div>
        </div>
        </span><br>
        <span class="price" data-id="1" data-price="23.00">Price: <span id="price">RM23.00</span></span>
        <button class="add-to-cart-btn" onclick="sendwhatsapp()">
            <a class="Chat-on-WhatsApp" target="_blank">
                <img class="WhatsApp-img" alt="Chat on WhatsApp" src="WhatsAppButtonGreenLarge.png" />
            </a></button>
        </p>
        </div>
        </div>
    </section>

    <script src="Supersale3.js"></script>
</body>

<?php
include "footer.php";
?>
</html>