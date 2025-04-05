<?php
session_start();
$file = 'cart.txt';

if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Weiterleitung zur Anmeldeseite
    exit;
}

$email = $_SESSION['email'];
$item = $_POST['item'];

// Warenkorb für den Benutzer laden
$userCart = [];
if (file_exists($file)) {
    $carts = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($carts as $cart) {
        list($storedEmail, $items) = explode(':', $cart);
        if ($storedEmail === $email) {
            $userCart = explode(',', $items);
            break;
        }
    }
}

// Produkt zum Warenkorb hinzufügen
$userCart[] = $item;
$userCartString = implode(',', $userCart);

// Warenkorb speichern
$cartData = "$email:$userCartString\n";
file_put_contents($file, $cartData, FILE_APPEND | LOCK_EX);

header("Location: cart.php"); // Weiterleitung zum Warenkorb
?>