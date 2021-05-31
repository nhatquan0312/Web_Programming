<?php 
$username = $_POST['username'];
$password = $_POST['password'];

if(emty($username)) {
    $name_error ="Please insert your name";
}
if(emty($password)) {
    $pass_error ="Please insert your password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Username: <?php echo $username ?></h1>
    <h2>Username: <?php echo $username ?></h2>
</body>
</html>