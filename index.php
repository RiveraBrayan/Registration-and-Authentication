<?php
session_start();
if (isset($_SESSION['userData']) && $_SESSION['userData'] != '') {
    header('Location: views/home.php');
    exit();
} else {
    header('Location: views/sign_in.php');
    exit();
}
?>
