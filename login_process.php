<?php
// Dateipfad für die Benutzerdaten
$file = 'users.txt';

// Benutzerdaten aus dem Formular
$email = $_POST['email'];
$password = $_POST['password'];

// Überprüfen, ob die Datei existiert
if (file_exists($file)) {
    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($storedName, $storedEmail, $storedPassword) = explode(',', $user);
        if ($storedEmail === $email) {
            // Passwort überprüfen
            if (password_verify($password, $storedPassword)) {
                echo "Anmeldung erfolgreich!";
                // Hier kannst du eine Session starten und den Benutzer einloggen
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