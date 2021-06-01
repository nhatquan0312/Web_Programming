<?php
function redirect_to($location){
    header('Location:'.$location);
}
?>
<?php
  $invalid = false;
    if (isset($_POST["act"])) {
        $data = fopen("admin.csv", "r");
        $row = fgetcsv($data, 1000, ",");
        if (
            $_POST["username"] == $row[0] &&
            $_POST["password"] == $row[1]
        ) {
            $_SESSION["admin_logged_in"] = true;
            redirect_to("/admin/dashboard.php");
        } else {
            $invalid = true;
        }   
        }
    
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
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
   <h2 >Login for Admin</h2>
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <div class="form-group">
      <label>Enter Username</label>
      <input type="text" name="username" placeholder="Enter Username" class="form-control" value="" />
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter Password" value="" />
     </div>
     <div class="form-group">
      <input type="submit" name="act" class="btn btn-info" value="Login" />
     </div>
    </form>
   </div>
  </div>
 </body>
</html>