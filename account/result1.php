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
include ('myaccount.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(emty($firstname)) {
        $fname_error ="This field is required";
    } 
    if(strlen(trim($firstname)) <3 ) {
        $fname_error ="Your first name needs to have a minimum length of 6";
    } else {
        $fname = trim($fname);
    }

    if(empty(trim($repass))){
        $repass_error = "Please confirm password";
        echo '<script type="text/javascript">',
        'display_error("#repassword","#repass");',
        '</script>';     
    } else{
        $repass = trim($repass);
        echo '<script type="text/javascript">',
     'display_success("#repassword","#repass");',
     '</script>';}

        if(empty($password_error) && ($password != $repass)){
            $repass_error = "Password did not match";
            echo '<script type="text/javascript">',
        'display_error("#repassword","#repass");',
        '</script>'; 
        }
    }
?>


