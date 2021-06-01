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

$user = "";
$pass = "";
  

$useroptions = ['cost' => 10,]; 
$pwoptions   = ['cost' => 10,]; 
$userhash    = password_hash($username, PASSWORD_BCRYPT, $useroptions); 
$passhash    = password_hash($password, PASSWORD_BCRYPT, $pwoptions);  
$hasheduser  = file_get_contents("store_data.csv"); 
$hashedpass  = file_get_contents("store_data.csv"); 




if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($username)) {
        $user_error ="Please enter you username";
    } if {isset($_POST['user'])) {
        $success ="Success";
        $username = $username;
    }

  if (isset($_POST['submit'])) {
    if ($password == 'password') {
      $_SESSION['loggedin'] = true;
      header('location: sampleuser.html');} 
      else {
      $pass_error = 'Invalid username/password';
    }
  }

      ?>

