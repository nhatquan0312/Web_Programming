<?php
    session_start();

    require 'functions.php';


    $products = read_all_products();
    $stores = read_all_stores();

    $store_id = $_GET['id'];
    
    //Get featured products
    $featured_products = [];
    foreach($products as $product) {
        if($product['store_id'] == $store_id && $product['featured_in_store'] == TRUE && count($featured_products) < 5) {
            $featured_products[] = $product;
        }
    }

    //get the sorted by time products

    $filtered_products = [];
    foreach ($products as $product) {
        if ($product['store_id'] == $store_id) {
            $filtered_products[] = $product;
        }
    }
    //new products

    $new_pro = read_all_products();

    usort($new_pro, "created_time_cmp");

    $new_products = [];

    $count_for_new_products = 0;

    echo '';
    foreach ($new_pro as $np) {
        if ($np['store_id'] == $store_id) {
            $new_products[] = $np;
            $count_for_new_products++;
            if ($count_for_new_products == 5) {
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
    <link rel="stylesheet" href="/store.css">
    <link rel="stylesheet" href="/cookies.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="script.js" defer></script>
    <title>Document</title>
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
              <li><a href="/account/orderplacement.html">
                  <ion-icon name="cart-outline"></ion-icon>
                </a></li>
            </ul>
          </div>
        </nav>
    
      </header>
    <section class='store-page'>
        <div class='store-logo'>
            <img src='img/Uniqlo/uniqlo_logo .jpg' alt='Uniqlo Logo'>
        </div>
        <div class='store-description'>
            <h2><?=$stores[$store_id-1]['name']?></h2>
            <p>Uniqlo is a clothing apparel company, which war originally founded in Yamaguchi, Japan in 1949 as a
                textiles manufacturer. Now it is a global brand with over 1000 stores around the world. Redefining
                clothing, with a focus on quality and textiles which has been unwaverd since the company's origins in
                1949.</p><br>
            <p>Address: 45 Le Thanh Ton, Ben Nghe, District 1, Ho Chi Minh city, Vietnam</p>
            <p>Facebook: https://www.facebook.com/uniqlovnam/
                <br>Instagram: https://www.instagram.com/uniqlovnam/
            </p>
        </div>
    </section>
    <section class='store-products'>
        <div class='p-title' id='all-products'>
            <h2 class='browse-tlt'> Browse products by:
                <div class='browse'>
                    <button class='dropdown-button'>Categories</button>
                    <div class='dropdown-content'>
                        <a href='/mainpage/product/product-list.html'>Tops</a>
                        <a href='/mainpage/product/product-list.html'>Outerwears</a>
                        <a href='/mainpage/product/product-list.html'>Bottoms</a>
                        <a href='/mainpage/product/product-list.html'>Accessories</a>
                    </div>
                </div>
                <div class='browse'>
                    <button class='dropdown-button'>Created time</button>
                    <div class='dropdown-content'>
                        <a href='/pagination.php?id=<?echo $store_id?>'>Newest First</a>
                        <a href='/pagination.php?id=<?echo $store_id?>'>Oldest First</a>
                    </div>
                </div>
            </h2>
        </div>
        <div class='p-title' id='new-products'>
            <h1>New Products</h1><br>

            <div class='new-products'>
                <?php 
                    foreach ($new_products as $new_product) {
                ?>
                <div class='item-box'>
                    <a href='product-u1.html'><img src='img/Uniqlo/Men_UT.jpg' alt='T-shirt'>
                        <h2><?=$new_product['name']?></h2>
                        <p class='price'><?=$new_product['price']?></p>
                    </a>
                </div>

                <?php
                    }
                ?>
            </div>
        </div><br>
        <hr>
        <div class='p-title' id='feature-products'>
            <h1> Feature Products</h1><br>

            <div class='new-products'>

                <?php
                    foreach ($featured_products as $featured_product) {
                ?>
                <div class='item-box'>
                    <a href='product1.html'><img src='img/Uniqlo/Pant.jpg' alt='Pant'>
                        <h2><?=$featured_product['name']?></h2>
                        <p class='price'><?=$featured_product['price']?></p>
                    </a>
                </div>

                <?php
                    }
                ?>
            </div><br>
            <hr>
        </div>
    </section>
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