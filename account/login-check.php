<?php
    session_start();
    function Order() {
        if($_SESSION['username']==NULL) {
            header('Location: login/login.html');
        }
        else {
            header('Location: thanks/thanks.html');
        }
    }   ;
?>