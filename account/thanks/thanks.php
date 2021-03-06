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
    <link rel="stylesheet" href="/account/thanks/thanks.css">
    <link rel="stylesheet" href="/cookies.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="script.js" defer></script>
    <title>Order Confirmed</title>
</head>
<script>
    function auto() {
        window.setTimeout(function() {window.location.href= "/index.php";},3000);
    };
</script>  
<body onload='auto()'>
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
    <section >
        <p class='confirmed'>Order Confirmed</p><br>
        <img class='icon' src='/img/tick.png' alt='green-tick'><br>
        <p class='confirmed'>Thank you.</p>
        <p class='alert'>Return home page in seconds...</p>
    </section >
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