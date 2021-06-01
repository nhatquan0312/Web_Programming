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
      <a href="/account/login/login.php"><label>Sign In</label></a>
    </div>
    <main> 
<form action="result1.php" method="POST" onsubmit= "return validate()">
<div class="form-sep">
<div class="form2">
  <div class="form-group">
          <label for="firstname" class="form-label">First name</label>
          <input id="firstname" name="firstname" type="text" placeholder="jessglynn@gmail.com" class="form-control"  autocomplete="off">
          <?php if(isset($fname_error)) { ?> 
                  <span id="fname" class="error-message"><?php echo $fname_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="fname" class="success-message"><?php echo $success ?></span>
                <?php } ?>
        </div>
  
  <div class="form-group">
          <label for="lastname" class="form-label">Last name</label>
          <input id="lastname" name="lastname" type="text" placeholder="jessglynn@gmail.com" class="form-control" autocomplete="off">
          <?php if(isset($lname_error)) { ?> 
                  <span id="lname" class="error-message"><?php echo $lname_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="lname" class="success-message"><?php echo $success ?></span>
                <?php } ?>
        </div>
     
  
      <div class="form-group">
        <label for="zipcode" class="form-label">Zipcode </label>
        <input id="zipcode" name="zipcode" type="text" placeholder="6 - digits" class="form-control" autocomplete="off">
        <?php if(isset($zcode_error)) { ?> 
                  <span id="zcode" class="error-message"><?php echo $zcode_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="zcode" class="success-message"><?php echo $success ?></span>
                <?php } ?>
      </div>

      <div class="form-group">
        <label for="city" class="form-label">City</label>
        <input id="city" name="city" type="text" placeholder="jessglynn@gmail.com" class="form-control" autocomplete="off">
        <?php if(isset($cty_error)) { ?> 
                  <span id="cty" class="error-message"><?php echo $cty_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="city" class="success-message"><?php echo $success ?></span>
                <?php } ?>
      </div>

<div class="form-group">
        <label for="address" class="form-label">Address</label>
        <input id="address" name="address" type="text" placeholder="19 Pham Ngoc Thach street, Phương Liên ward, Dong Da district, Hanoi city."
        class="form-control" autocomplete="off">
        <?php if(isset($adr_error)) { ?> 
                  <span id="adr" class="error-message"><?php echo $adr_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="adr" class="success-message"><?php echo $success ?></span>
                <?php } ?>
      </div> 

<div class="form-group">
      <label for="country" class="form-label">Country </label>
      <select name="country" id="country" class='form-control'>
        <option disabled selected value="">Select one</option>
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
    <?php if(isset($ctry_error)) { ?> 
                  <span id="ctry" class="error-message"><?php echo $ctry_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="ctry" class="success-message"><?php echo $success ?></span>
                <?php } ?>
    </div>      
    </div>   
<div class="form1">
     
  <div class="form-group">
              <label for="username" class="form-label">Email</label>
              <input id="username" name="username" type="text" placeholder="jessglynn@gmail.com" class="form-control" value="<?php echo $username?>" autocomplete="off">
              <?php if(isset($user_error)) { ?> 
                  <span id="user" class="error-message"><?php echo $user_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="user" class="success-message"><?php echo $success ?></span>
                <?php } ?>
            </div>
  <div class="form-group">
              <label for="phone" class="form-label">Phone number </label>
              <input id="mphone" name="phone" type="text" placeholder="6 - digits" class="form-control" autocomplete="off">
              <?php if(isset($phone_error)) { ?> 
                  <span id="phone" class="error-message"><?php echo $phone_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="phone" class="success-message"><?php echo $success ?></span>
                <?php } ?>         
            </div>

  <div class="form-group">
              <label for="password" class="form-label">Password</label>
              <input id="loginpass" name="password" type="password" placeholder="Enter your password" class="form-control"  autocomplete="off">
              <?php if(isset($pass_error)) { ?> 
                  <span id="lpass" class="error-message"><?php echo $pass_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="lpass" class="success-message"><?php echo $success ?></span>
                <?php } ?>
            </div>

      <div class="form-group">
        <label for="password_retype" class="form-label">Confirm Password</label>
        <input id="repassword" name="password_retype" placeholder="Retype your password " type="password" class="form-control" autocomplete="off">
        <?php if(isset($repass_error)) { ?> 
                  <span id="repass" class="error-message"><?php echo $repass_error ?></span><?php } elseif(isset($success)) { ?> 
                    <span id="repass" class="success-message"><?php echo $success ?></span>
                <?php } ?>
      </div>

  
         <span>You are:</span>
         <div>
          <input class="radio-box" type="radio" value="shopper" onclick="hideDiv()" name="radio" id="shopper" autocomplete="off" required>
          <label for="shopper" class="form-label">Shopper</label>
          <input class="radio-box" type="radio" value="owner"  onclick="showDiv()" id="owner" name="radio" autocomplete="off" required>
          <label for="owner" class="form-label">Store owner</label>
          </div>
          <?php if(isset($success)) { ?> 
                  <span id="type" class="error-message"><?php echo $success;?></span><?php } else { ?> 
                    <span id="type"><?php echo $type_error ?></span>
                <?php } ?>          
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
              <option disabled selected value="">Select one</option> 
              <option value="Department">Department</option>
                <option value="Grocery">Grocery</option>
                <option value="Restaurants">Restaurants</option>
                <option value="Clothing">Clothing</option>
                <option value="Accessory">Accessory</option>
                <option value="Pharmacies">Pharmacies</option>
                <option value="Technology">Technology</option>
                <option value="Pet">Pet </option>
                <option value="Thrift">Thrift</option>
                <option value="Specialty">Specialty</option>
                <option value="Toy">Toy</option>
                <option value="Services">Services</option>
                <option value="Kiosks">Kiosks</option>
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