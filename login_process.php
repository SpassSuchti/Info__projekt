<?php
session_start();
$file = 'users.txt';

$email = $_POST['email'];
$password = $_POST['password'];

if (file_exists($file)) {
    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($storedName, $storedEmail, $storedPassword) = explode(',', $user);
        if ($storedEmail === $email) {
            if (password_verify($password, $storedPassword)) {
                $_SESSION['user'] = $storedName; // Benutzername in der Sitzung speichern
                $_SESSION['email'] = $storedEmail; // E-Mail in der Sitzung speichern
                header("Location: index.php"); // Weiterleitung zur Startseite
                exit;
            } else {
                echo "Falsches Passwort.";
                exit;
            }
        }
    }
}

echo "Benutzer nicht gefunden.";
?>