<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: secure.php');
    exit();
}

if (isset($_COOKIE['blocked'])) {
    header('Location: blocked.php');
    exit();
}

header('Location: login.php');
exit();
?>

