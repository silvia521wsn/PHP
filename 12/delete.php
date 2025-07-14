<?php
session_start();

$code = $_POST['code'] ?? null;
if ($code !== null) {
    unset($_SESSION['cart'][$code]);
}

header('Location: cart.php');
exit;
