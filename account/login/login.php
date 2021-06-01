
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
    <link rel="stylesheet" href="/account/login/login.css">
    <link rel="stylesheet" href="/cookies.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="/script.js" defer></script>
   
    <title>Login page</title>
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
            <li><a href="/account/orderplacement.html">
                <ion-icon name="cart-outline"></ion-icon>
              </a></li>
          </ul>
        </div>
      </nav>
  
    </header>
    <main>
      <form action="result.php" onsubmit="return validate()">
        <h1 class="heading">Login</h1>
        <div class="des">
          <p>Already have an account?</p>
          <a href="/account/myaccount.php"><label>Sign Up</label></a>
        </div>
      <div class="form-group">
                  <label for="username" class="form-label">Username</label>
                  <input id="username" name="username" type="text" placeholder="jessglynn@gmail.com" class="form-control" autocomplete="off">
                  <span id="user" class="form-message"></span>
                </div>
 
       <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input id="loginpass" name="password" type="password" placeholder="Enter your password" class="form-control" autocomplete="off">
                  <span id="lpass" class="form-message"><?php echo $pass_error; ?></span>
                </div>
                
        <div class="des" id="form-checkbox">
                  <div><input id="check-box" type="checkbox">
                    <label for="line" class="form-label">Remember password</label></div>
                    <a href="resetpass.html"><label>Forgot password</label></a>
                  </div>
              <input type="submit" class="form-submit" name="submit" autocomplete= "off" value="Login">
            
      </form>
  </main>
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
<script src="/cookies.js"></script>

<script src="login.js"></script>
</body>
</html>

