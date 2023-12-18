<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/8f27d68390.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="logo1.css" />
  <link rel="stylesheet" href="Supersale1.css" />
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
          Super Sale
          <ul class="SS">
            <li><a href="SSKid.php">Kid Apparel</a></li>
            <li><a href="SSAdult.php">Adult Apparel</a></li>
            <li><a href="SSMuslim.php">Muslim wears and head scarfs</a></li>
          </ul>
        </li>

        <li id="BestSales">
          Best Sales
          <ul class="BS">
            <li><a href="BSKid.php">Hot Kid</a></li>
            <li><a href="BSAdult.php">Hot Adult Apparel</a></li>
            <li><a href="BsMuslim.php">Hot Muslim wears and scarf</a></li>
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
  </header>

  <head>
    <div class="SortBy">
      <p>
        <select id="sortSelect">
          <option value="" disabled selected>Sort By</option>
          <option value="AZ">A - Z</option>
          <option value="ZA">Z - A</option>
          <option value="LowUp">Price Low-Up</option>
          <option value="UpLow">Price Up-Low</option>
        </select>
      </p>
    </div>

  </head>
  <section class="shop-section">
    <div class="card-wrapper">
      <div data-id="1" class="card-item">
        <a href="Supersale2.php"><img src="1.jpg"></a>
        <div class="details">
          <h3>a</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span>
              <select name="color" id="color">
                <option value="" disabled selected>Select color</option>
                <option value="Red">Red</option>
                <option value="Blue">Blue</option>
                <option value="Black">Black</option>
              </select>
            </span>
            <span class="price">Price: RM2300</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>

      <div data-id="2" class="card-item">
        <a href="Supersale2.php"><img src="1.jpg"></a>
        <div class="details">
          <h3>c</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span class="price">Price: RM3</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>

      <div data-id="3" class="card-item">
        <a href="Supersale2.html"><img src="1.jpg"></a>
        <div class="details">
          <h3>b</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span class="price">Price: RM2</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>

      <div data-id="4" class="card-item">
        <a href="Supersale2.html"><img src="1.jpg"></a>
        <div class="details">
          <h3>d</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span class="price">Price: RM123</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>

      <div data-id="5" class="card-item">
        <a href="Supersale2.html"><img src="1.jpg"></a>
        <div class="details">
          <h3>e</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span class="price">Price: RM23</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>

      <div data-id="6" class="card-item">
        <a href="Supersale2.html"><img src="1.jpg"></a>
        <div class="details">
          <h3>f</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span class="price">Price: RM23</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>

      <div data-id="7" class="card-item">
        <a href="Supersale2.html"><img src="1.jpg"></a>
        <div class="details">
          <h3>g</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span class="price">Price: RM23</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>

      <div data-id="8" class="card-item">
        <a href="Supersale2.html"><img src="1.jpg"></a>
        <div class="details">
          <h3>h</h3>
          <p>
            <span>
              <select name="size" id="size">
                <option value="" disabled selected>Select Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </span>
            <span class="price">Price: RM23</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <script src="Supersale11.js"></script>
</body>

<?php
include "footer.php";
?>
</html>