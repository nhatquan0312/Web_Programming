<?php 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$zipcode = $_POST['zipcode'];
$city= $_POST['city'];
$address = $_POST['address'];
$country = $_POST['country'];
$username = $_POST['username'];
$password = $_POST['password'];
$repass = $_POST['repassword'];

function textClean($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($lastname)) {
        $lname_error ="This field is required";
    } if(textClean(strlen($lastname)) <3 ) {
        $lname_error ="Your last name needs to have a minimum length of 6";
    } else {
        $success ="Success";
        $lastname = $lastname;
    }
    if(empty($firstname)) {
        $fname_error ="This field is required";
    } if(textClean(strlen($firstname)) <3 ) {
        $fname_error ="Your first name needs to have a minimum length of 6";
    } else {
        $success ="Success";
        $firstname = $firstname;
    }
    if(empty($zipcode)) {
        $zip_error ="This field is required";
    } if(!is_nan(floatVal($zipcode))) {
        $zip_error ="This field only contains digits";
    } if(strlen($zipcode) <3 || strlen($zipcode) >7 ) {
        $zip_error ="Zipcode must contain 4 to 6 digits";
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
    if(empty(trim($username))) {
        $user_error ="This field is required";
    } if(!preg_match('/^(([a-zA-Z0-9][.]?){2,}|([a-zA-Z0-9]\.)+)([a-zA-Z0-9]|(?!\.))+?[a-zA-Z0-9]@(([a-zA-Z0-9]+\.)+[a-zA-Z]{2,5})$/', trim($username))) {
        $user_error ="Username can only contain letters, numbers, and underscores";
    } else {
        $success ="Success";
        $username = $username;
    }
    if(empty(trim($password))){
        $pass_error = "Please enter your password";     
    } if(strlen($password) <3 ) {
        $pass_error ="Your password needs to have a minimum length of 6";
    } if(!preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])$/', trim($password))) {
        $pass_error ="Passwords must contain 8 to 20 characters, no space, with at least 1 lower case letter, at least 1 upper case letter, at least 1 digit, and at least 1 special character in the set !@#$%^&*";
    } else {
        $success ="Success";
        $password = trim($password);
    }
    if(empty(trim($repass))){
        $repass_error = "Please confirm password";     
    } if(strlen($password) <3 ) {
        $repass_error ="Your password needs to have a minimum length of 6";
    } if($repass !== $password) {
        $repass_error ="Passwords does not match";
    } else {
        $success ="Success";
        $repass = trim($repass);
    }
    include("myaccount.php");
}


    
?>
