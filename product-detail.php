<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  
  
  <link rel="stylesheet" href="css/style.css">
  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
</head>
<body>
<div class="container">
  <!-- header -->
  <header>
    <div class="log-list-container">
      <img src="images/icon-menu.svg" alt="menu" class="menu">
      <p>Afri-Tech</p>
      <div class="list">
        <img src="images/icon-close.svg" alt="close-menu" class="close">
        <a href="#">Collections</a>
        
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
    </div>
    <div class="icon-photo-container">
      <div class="notification"></div>
      <img src="images/icon-cart.svg" alt="cart" class="icon-cart">
      

    </div>
  </header>
  <!-- product -->
  <div class="product">
    <div class="cart">
      <h4>cart</h4>
      <div class="empty">Your cart is empty.</div>
      <div class="cart-content">
        <img src="images/image-product-1-thumbnail.jpg" alt="product" class="cart-product">
        <div class="info">
          <div class="name">Fall Limited Edition Sneakers</div>
          <div class="total">125.00 × <span class="many"></span> <span class="value-mony"></span></div>
        </div>
        <img src="images/icon-delete.svg" alt="icon-delete" class="delete">
      </div>
      <div class="btn main check"><a href="./Actors/Customer/Checkout.php">Checkout</a></div>
    </div>
    <div class="product-images">
      <div class="large">
        <div class="previous">
          <i class="fas fa-angle-left"></i>
        </div>
        <div class="next">
          <i class="fas fa-angle-right"></i>
        </div>
      
          <img src="images/image-product-1.jpg" alt="product-1" class='product-1'>
      </div>
        <div class="small">
          <div class="active">
            <img src="images/image-product-1-thumbnail.jpg" alt="product-1-small"  class="product-1-thumbnail main">
          </div>
          <div>
            <img src="images/image-product-2-thumbnail.jpg" alt="product-2-small" class="product-2-thumbnail main">
          </div>
          <div>
            <img src="images/image-product-3-thumbnail.jpg" alt="product-3-small"  class="product-3-thumbnail main">
          </div>
          <div>
            <img src="images/image-product-4-thumbnail.jpg" alt="product-4-small"  class="product-4-thumbnail main">
        </div>
        </div>
    </div>
    <div class="product-info">
      <div class="company-name">Laptop Company</div>
      <h1 class="title">HP dual core laptop</h1>
      <p class="product-materials">
        These high-profile laptop is your perfect casual use companion. Featuring a durable external mouse and keyboard, It’ll withstand every workload the user can offer.
      </p>
      <div class="product-price">
        <div class="after-discount">
          <span class="value">$125.00</span> <span class="discount-value">50%</span>
        </div>
        <div class="before-discount">$250.00</div>
      </div>
      <div class="add-to-cart-container">
        <div class="count">
          <img src="images/icon-minus.svg" alt="icon-minus" class="main minus"> <span class="much">0</span> <img src="images/icon-plus.svg" alt="icon-plus" class="main plus">
        </div>
        <div class="btn main add">
          <img src="images/icon-cart-white.svg" alt="cart" class="icon-cart-white">
          Add to cart
        </div>
      </div>
    </div>
  </div>
  <div class="over-lay"></div>

  <div class="over-lay-photo">
    <div class="product-images">
          <div class="large">
            <i class="fas fa-times close"></i>
            <div class="previous">
              <i class="fas fa-angle-left"></i>
            </div>
            <div class="next">
              <i class="fas fa-angle-right"></i>
            </div>
          
              <img src="images/image-product-1.jpg" alt="product-1" class='product-1'>
        </div>
      <div class="small">
        <div class="active">
          <img src="images/image-product-1-thumbnail.jpg" alt="product-1-small"  class="product-1-thumbnail main">
        </div>
        <div>
          <img src="images/image-product-2-thumbnail.jpg" alt="product-2-small" class="product-2-thumbnail main">
        </div>
        <div>
          <img src="images/image-product-3-thumbnail.jpg" alt="product-3-small"  class="product-3-thumbnail main">
        </div>
        <div>
          <img src="images/image-product-4-thumbnail.jpg" alt="product-4-small"  class="product-4-thumbnail main">
        </div>
      </div>
    </div>

  </div>
  <!-- <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href=""></a>. -->
  </div>
</div>
<script src="js/main.js"></script>
</body>
</html>
