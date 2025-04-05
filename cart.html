<?php
session_start();
$file = 'cart.txt';

// Überprüfen, ob der Benutzer angemeldet ist
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Weiterleitung zur Anmeldeseite
    exit;
}

// Warenkorb für den angemeldeten Benutzer laden
$email = $_SESSION['email'];
$cartFile = $file;

if (file_exists($cartFile)) {
    $carts = file($cartFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $userCart = [];
    foreach ($carts as $cart) {
        list($storedEmail, $items) = explode(':', $cart);
        if ($storedEmail === $email) {
            $userCart = explode(',', $items);
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amaphone - Warenkorb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Warenkorb</h1>
        <nav>
            <ul>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="logout.php">Abmelden</a></li>
                <li><a href="impressum.php">Impressum</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Ihr Warenkorb</h2>
        <?php if (empty($userCart)): ?>
            <p>Ihr Warenkorb ist leer.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($userCart as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form action="add_to_cart.php" method="POST">
            <label for="item">Produkt hinzufügen:</label>
            <input type="text" id="item" name="item" required>
            <button type="submit" class="btn">Hinzufügen</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Amaphone. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>