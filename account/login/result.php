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
if (isset($_POST['user'])) { 
    $user = $_POST['user'];
}
if (isset($_POST['pass'])) { 
    $pass = $_POST['pass'];
}    

$useroptions = ['cost' => 10,]; 
$pwoptions   = ['cost' => 10,]; 
$userhash    = password_hash($username, PASSWORD_BCRYPT, $useroptions); 
$passhash    = password_hash($password, PASSWORD_BCRYPT, $pwoptions);  
$hasheduser  = file_get_contents("store_data.csv"); 
$hashedpass  = file_get_contents("store_data.csv"); 


if ((password_verify($user, $hasheduser)) && (password_verify($pass,$hashedpass))) {

    include "pass-protected.php";

} else { 
    // if it was invalid it'll just display the form, if there was never a $_POST
    // then it'll also display the form. that's why I set $user to "" instead of a $_POST
    // this is the right place for comments, not inside html
    ?>  
    <form method="POST" action="index.php">
    User <input type="text" name="user"></input><br/>
    Pass <input type="password" name="pass"></input><br/>
    <input type="submit" name="submit" value="Go"></input>
    </form>
    <?php 
} 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($username)) {
        $user_error ="Please enter you username";
    } if {isset($_POST['user'])) {
        $success ="Success";
        $username = $username;
    }
    
    if(empty($password)){
        $pass_error = "Please confirm password";     
    } else {
        $success ="Success";
        $password = $password;
    }

    
    //go to page
    if(isset($_POST['submit'])) {
        header('Location: /index.php'); // 'Location: /account/orderplacement.php'
    }
    include ('login.php');

}
?>





