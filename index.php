<?php
  session_start();

  require 'functions.php';

      //products

      $products = read_all_products();

      $featured_products=[];

      $count = 0;

      echo '<ul>';
      foreach ($products as $p) {
          if ($p['featured_in_mall'] === "TRUE") {
            $featured_products[] = $p;
            $count++;
            if ($count == 10) {
                break;
            }
          }
      }

      //stores
      $stores = read_all_stores();

      $featured_stores=[];

      $count_for_stores = 0;

      echo '<ul>';
      foreach ($stores as $s) {
          if ($s['featured'] === "TRUE") {
            $featured_stores[] = $s;
            $count_for_stores++;
            if ($count_for_stores == 10) {
                break;
            }
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
          <li><a href="/index.html">MUADE.</a></li>
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
          <li><a href="/index.html">Home</a></li>
          <li><a href="/navbar/about/aboutus.html">About us</a></li>
          <li><a href="/navbar/fees/fees.html">Fees</a></li>
          <li><a href="/navbar/faqs/faqs.html">FAQ</a></li>
          <li><a href="/account/login/login.html">My Account</a></li>
          <li><a href="/navbar/contact/contact.html">Contact</a></li>
          <li><a href="/account/orderplacement.html">
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

    <?php
      $sorted_by_date_stores = sort_by_group($stores, 'created_time', false);

    ?>


    <div class="wrapper-store">
      <div class="prev-btn"><i class="fas fa-chevron-left" id="button"></i></div>
      <div class="stores-container">
        <?php
          for($i=0; $i < 10; $i++) {
        ?>



        <div class="store-image">
          <a href='mainpage/store/store.html' style='text-decoration: none;'><img id="str-img" src='img/Uniqlo-logo(1).jpg'></a>
          <h3> <?=$sorted_by_date_stores[$i]['name']?> </h3>
        </div>

        <?php 
          }
        ?>


        <!--div class="store-image">
          <a href='mainpage/store/store2.html' style='text-decoration: none;'><img id="str-img" src='img/MLB-OG(1).png'></a>
        </div>
        <div class="store-image">
          <a href='mainpage/store/store3.html' style='text-decoration: none;'><img id="str-img" src='img/990__1511456189_555_McDonalds.png'></a>
        </div-->
      </div>
      
      <div class="next-btn"><i class="fas fa-chevron-right" id="button"></i></div>
    </div>
    <script src="main.js"></script>
    <div class="title"><strong>NEW PRODUCTS</strong><span><a href="#">MORE</a></span></div>

    <?php
      $sorted_by_date_products = sort_by_group($products, 'created_time', false);

    ?>




    <div class="proprev-btn"><i class="fas fa-chevron-left"></i></div>
    <div class="wrapper-product">
      <div class="new-products">
        <?php
        for($i=0; $i < 10; $i++) {


        ?>

        <div class='item-box'>
          <a href='mainpage/product/product-u1.html'><img src='img/Uniqlo/Men_UT.jpg' width='200px' height='250px' alt='T-shirt'></a>
          
            <h3> <?=$sorted_by_date_products[$i]['name']?> </h3>
            <p class='price'> <?=$sorted_by_date_products[$i]['price']?></p>
          
        </div>

        <?php 
          }
        ?>



        <!--div class='item-box'>
          <a href='mainpage/product/product-u3.html'><img src='img/Uniqlo/Child_UT.jpg' width='200px' height='250px' alt='T_shirt'></a>
          
            <h3>CHILD T-shirt</h3>
            <p class='price'>249.000 VND</p>
          
        </div>
        <div class='item-box'>
          <a href='mainpage/product/product2.html'><img src='img/abi1.jpg' width='200px' height='250px'></a>
          
            <h3>Cơm cháy siêu vị</h3>
            <p class='price'>26.000 VND</p>
          
        </div>
        <div class='item-box'>
          <a href='mainpage/product/product3.html'><img src='img/abi2.jpg' width='200px' height='250px'>
            <h3>Khô gà abi</h3>
            <p class='price'>35.000 VND</p>
          </a>
        </div>
        <div class='item-box'>
          <a href='mainpage/product/product4.html'><img src='img/mac7.webp' width='200px' height='250px'>
            <h3>Laptop APPLE ...</h3>
            <p class='price'>23.990.000 VND</p>
          </a>
        </div>
        <div class='item-box'>
          <a href='mainpage/product/product-u1.html'><img src='img/Uniqlo/Men_UT.jpg' width='200px' height='250px' alt='T-shirt'></a>
          
            <h3>MEN T-shirt </h3>
            <p class='price'>399.000 VND</p>
          
        </div>
        <div class='item-box'>
          <a href='mainpage/product/product-u3.html'><img src='img/Uniqlo/Child_UT.jpg' width='200px' height='250px' alt='T_shirt'></a>
          
            <h3>CHILD T-shirt</h3>
            <p class='price'>249.000 VND</p>
        </div> 
        <div class='item-box'>
          <a href='mainpage/product/product4.html'><img src='img/mac7.webp' >
          
            <h3>Laptop APPLE ...</h3>
            <p class='price'>23.990.000 VND</p>
          </a>
        </div-->
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
          <a href='mainpage/store/store.html' style='text-decoration: none;'><img id="str-img"src='img/Uniqlo-logo(1).jpg' ></a>
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