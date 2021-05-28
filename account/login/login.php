<?php
  session_start();

  if (isset($_POST['act'])) {
    if (isset($_POST['password']) && $_POST['password'] == 'password') {
      $_SESSION['loggedin'] = true;
      header('location: sampleuser.html');
    } else {
      $error = 'Invalid username/password';
    }
  }

  if (isset($error)) {
    echo "<p>$error</p>";
  }
?>

