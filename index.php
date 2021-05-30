<?php
  session_start();

  require 'functions.php';

      //featured_products

      $products = read_all_products();

      $featured_products=[];

      $count = 0;

      echo '';
      foreach ($products as $p) {
          if ($p['featured_in_mall'] === "TRUE") {
            $featured_products[] = $p;
            $count++;
            if ($count == 10) {
                break;
            }
          }
      }

      //featured_stores
      $stores = read_all_stores();

      $featured_stores=[];

      $count_for_stores = 0;

      echo '';
      foreach ($stores as $s) {
          if ($s['featured'] === "TRUE") {
            $featured_stores[] = $s;
            $count_for_stores++;
            if ($count_for_stores == 5) {
                break;
            }
          }
      }

      //new_products
      
      $new_pro = read_all_products();

      usort($new_pro, "created_time_cmp");

      $new_products = [];

      $count_for_new_products = 0;

      echo '';
      foreach ($new_pro as $np) {
            $new_products[] = $np;
            $count_for_new_products++;
            if ($count_for_new_products == 10) {
                break;
            }
      }

      //new_stores
      
      $new_sto = read_all_stores();

      usort($new_sto, "created_time_cmp_for_new_stores");

      $new_stores = [];

      $count_for_new_stores = 0;

      echo '';
      foreach ($new_sto as $ns) {
            $new_stores[] = $ns;
            $count_for_new_stores++;
            if ($count_for_new_stores == 5) {
                break;
            }
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
  <link rel="stylesheet" href="/cookies.css">
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/492245eeb1.js" crossorigin="anonymous"></script>
  <script src="script.js" defer></script>
  <title>Muade</title>
</head>

<body>

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
          <li><a href="/account/login/login.html">My Account</a></li>
          <li><a href="/navbar/contact/contact.html">Contact</a></li>
          <li><a href="/account/orderplacement.php">
              <ion-icon name="cart-outline"></ion-icon>
            </a></li>
        </ul>
      </div>
    </nav>

  </header>
  <main>
    <div class="declare">
      <p>"WE ARE THE PRIVATE MALL"</p>
    </div>


    <div class="title"><strong>NEW STORES</strong><span><a href="#">MORE</a></span></div>


    <div class="wrapper-store">
      <div class="prev-btn"><i class="fas fa-chevron-left" id="button"></i></div>
      <div class="stores-container">
        <?php
          foreach ($new_stores as $ns) {
        ?>

        <div class="store-image">
          <a href='store.php' style='text-decoration: none;'><img id="str-img" src='img/Uniqlo-logo(1).jpg'></a>
          <h3> <?=$ns['name']?> </h3>
        </div>

        <?php 
          }
        ?>
      </div>
      
      <div class="next-btn"><i class="fas fa-chevron-right" id="button"></i></div>
    </div>
    <script src="main.js"></script>
    <div class="title"><strong>NEW PRODUCTS</strong><span><a href="#">MORE</a></span></div>

    <div class="proprev-btn"><i class="fas fa-chevron-left"></i></div>
    <div class="wrapper-product">
      <div class="new-products">
        <?php
          foreach ($new_products as $np) {
        ?>

        

        <div class='item-box'>
          <a href='mainpage/product/product-u1.html'><img src='img/Uniqlo/Men_UT.jpg' width='200px' height='250px' alt='T-shirt'></a>
          
            <h3> <?=$np['name']?> </h3>
            <p class='price'> <?=$np['price']?> </p>
          
        </div>

        <?php 
          }
        ?>

      </div>
      <div class="pronext-btn"><i class="fas fa-chevron-right"></i></div>
    </div>




    <div class="title"><strong>FEATURED STORES</strong><span><a href="#">MORE</a></span></div>
    <div class="wrapper-ftstore">
      <div class="ftprev-btn"><i class="fas fa-chevron-left"></i></div>
      <div class="ftstores-container">

        <?php
          foreach ($featured_stores as $s) {
        ?>

        <div class="ftstore-image">
          <a href='store.php' style='text-decoration: none;'><img id="str-img"src='img/Uniqlo-logo(1).jpg' ></a>
          <h3><?=$s['name']?></h3>
        </div>

        <?php
          }
        ?>
      </div>
      <div class="ftnext-btn"><i class="fas fa-chevron-right"></i></div>
    </div>

    <div class="title"><strong>FEATURED PRODUCTS</strong><span><a href="#">MORE</a></span></div>
  

    <div class="proprev-btn"><i class="fas fa-chevron-left"></i></div>
    <div class="featured-products">

      <?php
        foreach ($featured_products as $p) {

      ?>

      <div class='ftitem-box'>
        <a href='mainpage/product/product1.html'><img src='img/Uniqlo/Child_UT.jpg' alt='t-shirt'>

          <h3><?=$p['name']?></h3>
          <p class='ftprice'><?=$p['price']?></p>
        </a>
      </div>

      <?php
        }
      ?>

    </div>
    <div class="pronext-btn"><i class="fas fa-chevron-right"></i></div>
  </main>



  <div class="cookie-container">
    <div>
      <p>
        Our website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of
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
  <script src="ftstore.js"></script>
  <script src="newproduct.js"></script>

</body>

</html>