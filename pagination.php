<?php
    session_start();
    //require 'functions.php';
    // read file
    function read_all_products() {
      $file_name = 'products.csv';
      $fp = fopen($file_name, 'r');
      $first = fgetcsv($fp);
      $products = [];
      while ($row = fgetcsv($fp)) {
        $i = 0;
        $product = [];
        foreach ($first as $col_name) {
          $product[$col_name] =  $row[$i];
          $i++;
        }
        $products[] = $product;
      }
      return $products;
    }

    //get id
    $store_id = $_GET['id'];
    //convert time
    function created_time_cmp($p1,$p2) {
      return - (strtotime($p1['created_time']) - strtotime($p2['created_time']));
    }
    // get products
    $all_products = read_all_products();  
    usort($all_products, 'created_time_cmp');

    $n_products = [];
    $count_products = 0;
    
    echo '';
    foreach ($all_products as $np) {
      if ($np['store_id'] == $store_id) {
        $n_products[] = $np;
        $count_products++;
        if ($count_products == 2) {
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
    <link rel="stylesheet" href="/mainpage/store/store.css">
    <link rel="stylesheet" href="/cookies.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="script.js" defer></script>
    <title>Created time</title>
</head>
<style>
  .item-box {
    margin-left: 25%;
  }
  .button {
    text-decoration:none;
    display:inline-block;
    background-color: black;
    color:white;
    text-align:center;
    padding: 8px 16px;
    width: 100px;
    height: 35px;
    border:none;

  }
  .btn1 {
    margin-left: 46%;
  }
</style>
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
              <li><a href="/account/login/login.php">My Account</a></li>
              <li><a href="/navbar/contact/contact.html">Contact</a></li>
              <li><a href="/account/orderplacement.php">
                  <ion-icon name="cart-outline"></ion-icon>
                </a></li>
            </ul>
          </div>
        </nav>
    
      </header>
    <section>
      <div class='new-products'>
            <?php 
                foreach ($n_products as $n_product) {
            ?>
              <div class='item-box'>
                  <a href='/mainpage/product/product-u1.html'><img src='img/Uniqlo/Men_UT.jpg' alt='T-shirt'>
                      <h2><?= $n_product['name']?></h2>
                     <p class='price'><?= $n_product['price']?></p>
                  </a>
              </div>

            <?php
                }
            ?>
        </div>
      </div><br>
            <?php
              /*require 'functions.php';
              $products_per_pages = 2;
              $products = read_all_products(); //read all products
              $total_pages = ceil($products/$products_per_pages); //count total pages 
              if (!isset($_GET['page'])) {
                $page = 1;
              } else {
                $page = $_GET['page'];
              } //show current page
              /*for ($page=1;$page<=$total_pages;$page++) {
                echo '<a href="pagination.php?page=' . $page . '">' .$page . '</a>';
              }*/
            ?>
      <form class='fbutton'>
        <a href='pagination.php?id=<?=$store_id?>' class='button btn1'>Previous</a>
        <a href='pagination.php?id=<?=$store_id?>' class='button'>Next</a>
      </form>
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