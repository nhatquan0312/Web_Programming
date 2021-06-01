<?php 

function textClean($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

$firstname = textClean($_POST['firstname']);
$lastname = textClean($_POST['lastname']);
$zipcode = textClean($_POST['zipcode']);
$city= textClean($_POST['city']);
$address = textClean($_POST['address']);
$country = textClean($_POST['country']);
$username = textClean($_POST['username']);
$password = textClean($_POST['password']);
$repass = textClean($_POST['repassword']);
$error= "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($lastname)) {
        $lname_error="This field is required";
    } if(strlen($lastname) <3 ) {
        $lname_error ="Your last name needs to have a minimum length of 6";
    } else {
        $success ="Success";
        $lastname = $lastname;
    }
    if(empty($firstname)) {
        $fname_error ="This field is required";
    } if(strlen($firstname) <3) {
        $fname_error ="Your first name needs to have a minimum length of 6";
    } else {
        $success ="Success";
        $firstname = $firstname;
    }
    if(empty($zipcode)) {
        $zcode_error ="This field is required";
    } if(!is_nan($zipcode)) {
        $zcode_error ="This field only contains digits";
    } if(strlen($zipcode) <3 || strlen($zipcode) >7 ) {
        $zcode_error ="Zipcode must contain 4 to 6 digits";
    } else {
        $success ="Success";
        $zipcode = $zipcode;
    }
    if(empty($city)) {
        $cty_error ="This field is required";
    } if(strlen($city) <3 ) {
        $cty_error ="This field need to have a minimum length of 6";
    } else {
        $success ="Success";
        $city = $city;
    }
    if(empty($address)) {
        $adr_error ="This field is required";
    } if(strlen($address) <3 ) {
        $adr_error ="This field need to have a minimum length of 6";
    } else {
        $success ="Success";
        $address = $address;
    }
    if(empty($country)) {
        $ctry_error ="Please select one";
    } else {
        $success ="Success";
        $country = $country;
    }
    if(empty($username)) {
        $user_error ="This field is required";
    } if(!preg_match('/^(([a-zA-Z0-9][.]?){2,}|([a-zA-Z0-9]\.)+)([a-zA-Z0-9]|(?!\.))+?[a-zA-Z0-9]@(([a-zA-Z0-9]+\.)+[a-zA-Z]{2,5})$/', $username)){
        $user_error ="$email is not a valid email address";
    } else {
        $success ="$username is a valid email address";
        $username = $username;
    }
    if(empty($password)){
        $pass_error = "Please enter your password";     
    } if(strlen($password) <3 ) {
        $pass_error ="Your password needs to have a minimum length of 6";
    } if(!preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])$/', $password)) {
        $pass_error ="Passwords must contain 8 to 20 characters, no space, with at least 1 lower case letter, 1 upper case letter, 1 digit, 1 special character in the set !@#$%^&*";
    } else {
        $success ="Success";
        $password = $password;
    }
    if(empty($repass)){
        $repass_error = "Please confirm password";     
    } if(strlen($password) <3 ) {
        $repass_error ="Your password needs to have a minimum length of 6";
    } if($repass !== $password) {
        $repass_error ="Passwords does not match";
    } else {
        $success ="Success";
        $repass = $repass;
    }
    if($success !== '')
    {
     $file_open = fopen("store_data.csv", "a");
     $no_rows = count(file("store_data.csv"));
     if($no_rows > 1)
     {
      $no_rows = ($no_rows - 1) + 1;
     }
     $form_data = array(
      'sr_no'  => $no_rows,
      'firstname'  => $firstname,
      'lastname'  => $lastname,
      'zipcode'  => $zipcode,
      'email'  => $username,
      'city' => $city,
      'address' => $address,
      'email'  => $username,
      'password'  => $password,
      'confirm pass'  => $repass,
     );
     fputcsv($file_open, $form_data);
     $label = '<label class="heading">Thank you for contacting us</label>';
     $name = '';
     $email = '';
     $subject = '';
     $message = '';
    }
}
   
?>
