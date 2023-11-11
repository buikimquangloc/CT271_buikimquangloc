<?php

    session_start();
    if(isset($_SESSION['username'])) {
        unset($_SESSION['username']);
    }

    header('location: login_user.php');
    
?>