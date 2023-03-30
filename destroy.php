<?php
session_start();

if (isset($_POST['logout-btn']))
 {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out successfully";
    header("Location: /earist-lost-and-found-website/");
    exit(0);

    }

?>