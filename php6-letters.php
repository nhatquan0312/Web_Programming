<?php

    session_start();
    require 'php6-function-letter.php';

    $letter = $_POST["letter"];
	$stores = [];

	foreach ($browse_letter as $let) {
		$first_letter = strtolower(substr($let[1], 0, 1));
		if ($first_letter == $letter) {
			$stores[] = $let;
		}
	}
	usort($stores, "sortStoreName");

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
  <link rel="stylesheet" href="/php6-letters.css">
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
          <li><a href="/account/login/login.php">My Account</a></li>
          <li><a href="/navbar/contact/contact.html">Contact</a></li>
          <li><a href="/account/orderplacement.php">
              <ion-icon name="cart-outline"></ion-icon>
            </a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="browse">
    <button class="dropdown-letter-list">Browse by letters :</button>
    <form method="post" action="php6-letters.php">
        <input type="submit" name="letter" value="a" ></input>
        <input type="submit" name="letter" value="b" ></input>
        <input type="submit" name="letter" value="c" ></input>
        <input type="submit" name="letter" value="d" ></input>
        <input type="submit" name="letter" value="e" ></input>
        <input type="submit" name="letter" value="f" ></input>
        <input type="submit" name="letter" value="g" ></input>
        <input type="submit" name="letter" value="h" ></input>
        <input type="submit" name="letter" value="i" ></input>
        <input type="submit" name="letter" value="j" ></input>
        <input type="submit" name="letter" value="k" ></input>
        <input type="submit" name="letter" value="l" ></input>
        <input type="submit" name="letter" value="m" ></input>
        <input type="submit" name="letter" value="n" ></input>
        <input type="submit" name="letter" value="o" ></input>
        <input type="submit" name="letter" value="p" ></input>
        <input type="submit" name="letter" value="q" ></input>
        <input type="submit" name="letter" value="r" ></input>
        <input type="submit" name="letter" value="s" ></input>
        <input type="submit" name="letter" value="t" ></input>
        <input type="submit" name="letter" value="u" ></input>
        <input type="submit" name="letter" value="v" ></input>
        <input type="submit" name="letter" value="x" ></input>
        <input type="submit" name="letter" value="y" ></input>
        <input type="submit" name="letter" value="z" ></input>
    </form>
  </div>

    <div class="container">
      <!-- Store card row-->
      <div class="store-container">
        <?php
        for ($i = 0; $i < count($stores); $i++) {
        ?>
        <div class="store-image">
          <a href="store.php?id=<?=$stores[$i][0]?>" style='text-decoration: none;'><img id="str-img" src='img/Uniqlo-logo(1).jpg'></a>
          <h3> <?=$stores[$i][1]?> </h3>
        </div>
        <?php    
            }
        ?>

      </div>
    </div>
  
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

</body>

</html>