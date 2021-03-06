<?php
  session_start();
  if(!(isset($_SESSION['loggedin'])))
  {
      function order() {
          header("Location: login/login.php");
        }
      if(array_key_exists('order', $_POST)) { 
        order();
        };
  } else {
    header("Location: thanks/thanks.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/nav.css">
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="/account/orderplacement.css">
    <link rel="stylesheet" href="/cookies.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="script.js" defer></script>
    <script src='products-cart.js' async></script>
    <title>Order Placement</title>
</head>
<body onload="autoFill()">
    <div class="wrapper">

    </div>
    <header>
        <nav class="navbar">
          <div class="brand-title">
            <ul>
              <li><a href="/index.php">MUADE.</a></li>
            </ul>
          </div>
          <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <div class="navbar-links">
            <ul>
              <li><div class="searchbar">
                <input type="search" placeholder="Search" name="" id="" >
              </div></li>
              <li><a href="/index.php">Home</a></li>
              <li><a href="/navbar/about/aboutus.html">About us</a></li>
              <li><a href="/navbar/fees/fees.html">Fees</a></li>
              <li><a href="/navbar/faqs/faqs.html">FAQ</a></li>
              <li><a href="/account/login/login.php">My Account</a></li>
              <li><a href="/navbar/contact/contact.html">Contact</a></li>
              <li><a href="/account/orderplacement.php">
                  <ion-icon name="cart-outline"></ion-icon>
                </a></li>
            </ul>
          </div>
        </nav>
    
      </header>
    <div class='background'>
        <h1 style='text-align: center; padding:1%;'>YOUR SHOPPING CART</h1>
        <div class='flex order-content'>
            <h2> Name</h2>
            <h2>Price</h2>
            <h2>Quantity</h2>
            <h2>Remove</h2>
        </div>
        <div class='order-content items'>

            <div class='flex item' id='box1'>
                <p class='cart-name' id='name1'></p>
                <p class='cart-price' id='price1'></p>
                <div class='c-quantity-input'>
                    <input class='quantity-input' type="number" value="1">
                    <button class='btn remove-button' type='button'>REMOVE</button>
                </div>
            </div>
            <div class='flex item' id='box2'>
                <p class='cart-name' id='name2'></p>
                <p class='cart-price' id='price2'></p>
                <div class='c-quantity-input'>
                    <input class='quantity-input' type="number" value="1">
                    <button class='btn remove-button' type='button'>REMOVE</button>
                </div>
            </div>
            <hr>
            <div class='coupon'>
                <p id='tlt'>Total</p>
                <p class='total-price' id='tprice'>0</p>
                <input type='text' id='coupon' placeholder="use coupon here">
                <button id='check' onclick='validate();'>Apply coupon</button>
                <p id='note'></p>
            </div>
            <!--<div class='flex' id='box'>
                <p>MEN T-shirt</p>
                <p>399.000 VND</p>
                <p><input type="number" value="1" min="1" id='number'></p>
            </div> -->
        </div> 

        <div class='order-content order-bar'>
            

            <hr style='border-top: 1px dashed grey'><br>
            <div class='order-button'>
                <a href='/index.php'>Continue Shopping</a>
                <form method='post'>
                  <input type='submit' name='order' value='Order' />
                </form>
            </div>
        

        </div>

    </div>
    <div class="cookie-container">
        <div>
            <p>
                Our website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my
                use of
                cookies and other technologies. To find out more, read our
                <a href="privacy-policy.html">privacy policy</a> and <a href="#">cookie policy</a>.
            </p>
        </div>
        <div class="button-container">
            <button class="cookie-btn">
                I understand
            </button>
            <span><a href="#">Learn more</a></span>
        </div>
    </div>
    <footer>
        <nav class="footer-navbar">
    
          <div class="footer-navbar-links">
            <ul>
              <li><a href="/navbar/copyright/copyright.html">Copyright</a></li>
              <li><a href="/navbar/copyright/tos.html">Terms of Service</a></li>
              <li><a href="/navbar/copyright/privacy-policy.html">Privacy Poilcy</a></li>
    
            </ul>
    
          </div>
          <div class="brand-title"> @2021 MUADE All right reserved</div>
        </nav>
    
      </footer>
    <script src="cookies.js"></script>
</body>


</html>