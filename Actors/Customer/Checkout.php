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
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="../../css/auth-style.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="../../css/all.css">
</head>
<body>
<header>
  <div class="log-list-container">
    <img src="images/icon-menu.svg" alt="menu" class="menu">
    <p id="afri">Afri-Tech</p>
    <div class="list">
      <img src="images/icon-close.svg" alt="close-menu" class="close">
      <a href="../../index.php">Home</a>
      
      <a href="Order_List.php">Order</a>
      <a href="#">About</a>
    </div>

  </div>
  <i  id="menu-bars"></i>
  <i  id="search-icon"></i>
  <div class="icon-photo-container">
    <div class="notification"></div>
    <img src="../../images/icon-cart.svg" alt="cart" class="icon-cart">
    

  </div>
 
</header>
<br>

<br>
<br>

<br>

<section class="order" id="order">
  <h3 class="sub-heading">Order now</h3>
  <h1 class="heading">free and fast </h1>
  <form action="" >
    <div class="inputbox">
      <div class="input">
        <span>your name</span>
        <input id="name" type="text" placeholder="enter your name">
      </div>
      <div class="input">
        <span>your purchase</span>
        <input type="text" id="itemName" placeholder="enter item name" disabled>
      </div>
      <div class="input">
        <span>how many</span>
        <input type="number" id="itemCount" placeholder="how many orders">
      </div>
    </div>
    <div class="inputbox">
      <div class="input">
        <span>your number</span>
        <!-- <input type="tel" id="phone" name="phone" pattern="[0]{1}-[0-9]{2}-[0-9]{3}-[0-9]{4}" placeholder="0-23-456-7890"> -->
        <input type="tel" id="phone" name="phone" pattern="^(\+251|0)(9|11)[0-9]{8}$" placeholder="Enter your phone number...">
      </div>
      <div class="input">
        <span>Unit price</span>
        <input type="text" id="itemPrice" placeholder="Unit Price" disabled>
      </div>
      <div class="input">
        <span>Sub Total</span>
        <input type="text" id="subTotal" placeholder="how many orders" disabled>
      </div>
    </div>
    <div class="inputbox">
      <div class="input">
        <span>date and time</span>
        <input type="datetime" id="date">
      </div>
      <div class="input">
        <span>Service Charge</span>
        <input type="text" id="serviceCharge" placeholder="Our Service Charge" value="6500" disabled>
      </div>
      <div class="input">
        <span>Grand Total</span>
        <input type="text" id="grandTotal" placeholder="how many orders" disabled>
      </div>
    </div>
    <div class="inputbox">
      <div class="input">
        <span>your address</span>
        <textarea name="" id="address" placeholder="enter your address" cols="30" rows="10"></textarea>
      </div>
      <div class="input">
        <span>your message</span>
        <textarea name="" id="" placeholder="enter your message" cols="30" rows="10"></textarea>
      </div>
    </div>
    <input type="submit" value="order now" class="btn">
  </form>
</section>




<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script defer src="script.js"></script>  
<script>
  let itemCount = document.getElementById("itemCount");
  let itemPrice = document.getElementById("itemPrice");
  let itemName = document.getElementById("itemName");
  let userName = document.getElementById("name");
  let userNumber = document.getElementById("phone");
  let userAddress = document.getElementById("address");
  let date = document.getElementById("date");
  let today = new Date();
  console.log(today);
  date.value = today;

    let items = localStorage.getItem("items");
    if (items) {
      let itemObj = JSON.parse(items);
      console.log(itemObj);
      itemObj = itemObj[0];
      itemCount.value = itemObj.itemCount;
      itemPrice.value = itemObj.itemPrice;
      itemName.value = itemObj.itemName;
    }

    let user = localStorage.getItem("user");
    if (user) {
      let userObj = JSON.parse(user);
      console.log(userObj);
      userName.value = userObj.name;
      userNumber.value = userObj.number;
      userAddress.value = userObj.address;
    }
</script>
</body>
</html>