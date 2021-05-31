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
    <link rel="stylesheet" href="/account/myaccount.css">
    <link rel="stylesheet" href="/cookies.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
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
            <li><a href="/account/login/login.php">My Account</a></li>
            <li><a href="/navbar/contact/contact.html">Contact</a></li>
            <li><a href="/account/orderplacement.html">
                <ion-icon name="cart-outline"></ion-icon>
              </a></li>
          </ul>
        </div>
      </nav>

    </header>
    

    <h1 >Register</h1>
    <div class="des">
      <p>Already have an account?</p>
      <a href="login.html"><label>Sign In</label></a>
    </div>
    <main> 
<form action="result1.php" method="POST" onsubmit= "return validate()">
<div class="form-sep">
<div class="form2">
  <div class="form-group">
          <label for="firstname" class="form-label">First name</label>
          <input id="firstname" name="firstname" type="text" placeholder="jessglynn@gmail.com" class="form-control" autocomplete="off">
          <span id="fname" class="form-message"><?php echo $fname_error?></span>
        </div>
  
  <div class="form-group">
          <label for="lastname" class="form-label">Last name</label>
          <input id="lastname" name="lastname" type="text" placeholder="jessglynn@gmail.com" class="form-control" autocomplete="off">
          <span id="lname" class="form-message"></span>
        </div>
     
  
      <div class="form-group">
        <label for="zipcode" class="form-label">Zipcode </label>
        <input id="zipcode" name="zipcode" type="text" placeholder="6 - digits" class="form-control" autocomplete="off">
        <span class="form-message" id="zcode"></span>
      </div>

      <div class="form-group">
        <label for="city" class="form-label">City</label>
        <input id="city" name="city" type="text" placeholder="jessglynn@gmail.com" class="form-control" autocomplete="off">
        <span id="cty" class="form-message"></span>
      </div>

<div class="form-group">
        <label for="address" class="form-label">Address</label>
        <input id="address" name="address" type="text" placeholder="19 Pham Ngoc Thach street, Phương Liên ward, Dong Da district, Hanoi city."
        class="form-control" autocomplete="off">
        <span id="adr" class="form-message"></span>
      </div> 

<div class="form-group">
      <label for="country" class="form-label">Country </label>
      <select name="country" id="country" class='form-control'>
        <option value="">Select one</option>
        <option value="AF">Afghanistan</option>
        <option value="BE">Belgium</option>
        <option value="CN">China</option>
        <option value="DK">Denmark</option>
        <option value="EG">Egypt</option>
        <option value="FR">France</option>
        <option value="DE">Germany</option>
        <option value="HK">Hong Kong</option>
        <option value="IN">India</option>
        <option value="JP">Japan</option>
        <option value="KE">Kenya</option>
        <option value="LR">Liberia</option>
        <option value="MY">Malaysia</option>
        <option value="NG">Nigeria</option>
        <option value="OM">Oman</option>
        <option value="PH">Philippines</option>
        <option value="QA">Qatar</option>
        <option value="RU">Russian Federation</option>
        <option value="ES">Spain</option>
        <option value="TH">Thailand</option>
        <option value="US">United States</option>
        <option value="VN">Viet Nam</option>
        <option value="WF">Wallis and Futuna</option>
        <option value="YE">Yemen</option>
        <option value="ZM">Zambia</option>
    </select>
    <span id="ctry" class="form-message"></span>
    </div>      
    </div>   
<div class="form1">
     
  <div class="form-group">
              <label for="username" class="form-label">Email</label>
              <input id="username" name="username" type="text" placeholder="jessglynn@gmail.com" class="form-control" autocomplete="off">
              <span id="user" class="form-message"></span>
            </div>
  <div class="form-group">
              <label for="phone" class="form-label">Phone number </label>
              <input id="mphone" name="phonenumber" type="text" placeholder="6 - digits" class="form-control" autocomplete="off">
              <span id="phone" class="form-message"></span>           
            </div>

  <div class="form-group">
              <label for="password" class="form-label">Password</label>
              <input id="loginpass" name="password" type="password" placeholder="Enter your password" class="form-control" autocomplete="off">
              <span id="lpass" class="form-message"><?php echo $pass_error?></span>
            </div>

      <div class="form-group">
        <label for="password_retype" class="form-label">Confirm Password</label>
        <input id="repassword" name="password_retype" placeholder="Retype your password " type="password" class="form-control" autocomplete="off">
        <span class="form-message" id="repass"><?php echo $repass_error?></span>
      </div>

  
         <span>You are:</span>
         <div>
          <input class="radio-box" type="radio" value="shopper" onclick="hideDiv()" name="accounttype" id="shopper" autocomplete="off">
          <span>Shopper</span>
          <input class="radio-box" type="radio" value="owner"  onclick="showDiv()" id="owner" name="accounttype" autocomplete="off">
          <span> Store owner</span>             
            <div  id="detail">
            <div class="form-group">
                  <label for="business name" class="form-label">Business name</label>
                  <input id="b-name" name="bname" type="text" placeholder="Fill this field" class="form-control" autocomplete="off">
                  <span class="form-message" id="bname"></span>
            </div>
            <div class="form-group">
              <label for="store name" class="form-label">Store name</label>
              <input id="st-name" name="stname" type="text" placeholder="Fill this field" class="form-control" autocomplete="off">
              <span class="form-message" id="stname"></span>
            </div>

            <div class="form-group">
              <label for="category" class="form-label">Store category</label>
              <select name="category" id="category" class='form-control'>
                <option>Department</option>
                <option>Grocery</option>
                <option>Restaurants</option>
                <option>Clothing</option>
                <option>Accessory</option>
                <option>Pharmacies</option>
                <option>Technology</option>
                <option>Pet </option>
                <option>Thrift</option>
                <option>Specialty</option>
                <option>Toy</option>
                <option>Services</option>
                <option>Kiosks</option>
            </select>
            <span class="form-message" id="cate"></span>
            </div>
              </div>
          </div>
        </div>
      </div>
    </div>
      
<div class="Box">
    <input type="submit" class="form-submit" name="submit" autocomplete= "off" value="Register">
    <input type="reset" class="form-submit" name="reset" autocomplete= "off" value="Clear">
</div>
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
    <script src="cookies.js"></script>
    <script src="script.js" defer></script>
    <script src="myaccount.js"></script>
</body>
</html>