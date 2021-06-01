<?php

$error = '';
$username= '';
$password='';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["username"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Username</label></p>';
 }
 else
 {
  $username = clean_text($_POST["username"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$username))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["password"]))
 {
  $error .= '<p><label class="text-danger">Password is required</label></p>';
 }
 else
 {
  $password = clean_text($_POST["password"]);
 }

 if($error == '')
 {
  $file_open = fopen("admin.csv", "a"); 
  $form_data = array(
   'username'  => $username,
   'password' => $password
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Register Success. Please delete this file and click on this <a href="login.php">link</a> to proceed to login page</label>';
  $username = '';
  $password='';
 }
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Register</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  h2,h3{
      text-align:center;
  }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 >Register for Admin Account</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <h3>Contact Form</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>Enter Username</label>
      <input type="text" name="username" placeholder="Enter Username" class="form-control" value="<?php echo $username; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $password; ?>" />
     </div>
     <div class="form-group">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     </div>
    </form>
   </div>
  </div>
 </body>
</html>