<?php 
session_start();

$password = $_POST['password'];
$username = $_POST['username'];

function textClean($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($username)) {
        $user_error ="This field is required";
    } if(textClean(strlen($username)) <3 ) {
        $user_error ="Your first name needs to have a minimum length of 6";
    } else {
        $success ="Success";
        $username = $username;
    }
    
    if(empty($password)){
        $pass_error = "Please confirm password";     
    } else {
        $success ="Success";
        $password = trim($password);
    }

    include ('login.php'); }
?>


