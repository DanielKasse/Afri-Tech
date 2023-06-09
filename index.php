<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant</title>

  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="all.min.css">

</head>
<body>
  <div class="container">
  <header>
    <div class="log-list-container">
      <img src="images/icon-menu.svg" alt="menu" class="menu">
      <p id="afri">Afri-Tech</p>
      <div class="list">
        <img src="images/icon-close.svg" alt="close-menu" class="close">
        <a href="#">Home</a>
      
        <a href="Actors/Customer/Order_List.php">Order</a>
        <a href="/Actors/Customer/About.php">About</a>
      </div>

    </div>
    <i  id="menu-bars"></i>
    <i  id="search-icon"></i>
    <div class="icon-photo-container">
      <div class="notification"></div>
      <img src="images/icon-cart.svg" alt="cart" class="icon-cart">
    </div> 
  </header>



<form action=" " id="search-form">
  <input type="search" placeholder="search here..." name="" id="search-box">
  <label for="search-box" class="fas fa-search"></label>
  <i class="fas fa-times" id="close"></i>
</form>


<section id="home" class="home">
  <div class="swiper container home-slider">
    <div class="swiper-wrapper wrapper">
      <div class="swiper-slide slide">
        <div class="content">
          <span>our special products</span>
          <h3>Logi Camera</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <a href="#" class="btn">add to cart</a>
          <a href="#" class="btn active">order now</a>
        </div>
        <div class="image">
          <img src="images/home-img-1.jpg" height="400rem" width="400rem" alt="">
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="content">
          <span>our special products</span>
          <h3>Nvidia Geforce RTX 3080</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <a href="#" class="btn">add to cart</a>
          <a href="#" class="btn active">Order now</a>
        </div>
        <div class="image">
          <img src="images/home-img-2.jpg" alt="" width="400rem" height="400rem">
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="content">
          <span>our special products</span>
          <h3>Latest HP dual core Laptop</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

          <a href="product-detail.php" class="btn">add to cart</a>

          
          <a href="Actors/Customer/Checkout.php" class="btn active">order now</a>
        </div>
        <div class="image">
          <img src="images/home-img-3.jpg" width="400rem" height="400rem" alt="">
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>


<!-- <section class="main-container">
  <div class="thebox">
    <div class="h2-header">
      <a  href="#"><h2  class="head">
        Brand Products ->

      </h2></a>

    </div>

    <div class="circled-features">
      <a href="#">
      <img src="images/hp.jpg" alt="hp">
      <span> HP LAPTOP</span>
      </a>
      

    </div>

  </div>

</section> -->



<section style="background-color: white;">
  <div class="pro-grand">
    <div class="pro-container">
  
      <div class="pro-header">
          <h1>products</h1>
      </div>
  
      <div class="pro-products">
  
          <div class="pro-product">
              <div class="pro-image">
                  <img src="images/earphone.png" alt="">
              </div>
              <div class="pro-namePrice">
                  <h3>earphone</h3>
                  <span>$ 15.99</span>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
              <div class="pro-stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
              </div>
              <div class="pro-bay">
                  <button> <a href="Actors/Customer/Checkout.php">buy now </a></button>
              </div>
          </div>
  
          <div class="pro-product">
              <div class="pro-image">
                  <img src="images/laptop.png" alt="">
              </div>
              <div class="pro-namePrice">
                  <h3>laptop</h3>
                  <span>$ 150.99</span>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="pro-stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </div>
              <div class="pro-bay">
                  <button> <a href="Actors/Customer/Checkout.php">buy now </a></button>
              </div>
          </div>
  
          <div class="pro-product">
              <div class="pro-image">
                  <img src="images/watch3.png" alt="">
              </div>
              <div class="pro-namePrice">
                  <h3>watch</h3>
                  <span>$ 20.99</span>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="pro-stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
              </div><div class="pro-bay">
                  <button> <a href="Actors/Customer/Checkout.php">buy now </a></button>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>

























<!-- footer section starts here -->
<!-- <section>
<footer class="foot_section">  
  <div  class="col">
    <img src="" alt="">
    <h4>Contact</h4>
    <p><strong>address: </strong>362 Bulgarian Road, street 32, Bahir Dar</p>
    <p><strong>phone: </strong>+251923467881 / +251968985648</p>
    <p><strong>Hours: </strong>10:00 - 12:00, Mon - Sun</p>
    <div class="follow">
      <h4>Follow us</h4>
      <div class="icon">
        <i class="fal fa-facebook"></i>
        <i class="fal fa-twitter"></i>
        <i class="fal-fa-instagram"></i>

      </div>

    </div>
  </div>
<div class="col">
  <h4>about</h4>
  <a href="#">About</a>
  <a href="#">Delivery Information</a>
  <a href="#">Privacy Policy</a>
  <a href="#">Terms and Conditions</a>
  <a href="#">Contact Us</a>

</div>
<div class="col">
  <h4>My account</h4>
  <a href="#">Sign In</a>
  <a href="#">View Carts</a>
  <a href="#">My Wishlist</a>
  <a href="#">Track My Order</a>
  <a href="#">Help</a>

</div>




</footer>
</section> -->
<!-- footer section ends here -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script defer src="script.js"></script> 
</div> 
</body>
</html>