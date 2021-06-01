<?php 


$password = $_POST['password'];
$repass = $_POST['repassword'];


if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($password))){
        $pass_error = "This field is required";     
    } elseif(strlen(trim($password)) < 6){
        $pass_error = "Password must have atleast 6 characters";
    } else{
        $password = trim($password);
    }

    if(empty(trim($repass))){
        $repass_error = "Please confirm password";
        echo '<script type="text/javascript">',
        'display_error("#repassword","#repass"); ;',
        '</script>';     
    } else{
        $repass = trim($repass);
        echo '<script type="text/javascript">',
     'display_success("#repassword","#repass"); ;',
     '</script>';}

        if(empty($password_error) && ($password != $repass)){
            $repass_error = "Password did not match";
            echo '<script type="text/javascript">',
        'display_error("#repassword","#repass"); ;',
        '</script>'; 
        }
        include (login.php);
    }
?>


