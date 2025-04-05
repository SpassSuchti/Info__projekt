<?php
// Dateipfad für die Benutzerdaten
$file = 'users.txt';

// Benutzerdaten aus dem Formular
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Passwort hashen

// Überprüfen, ob die Datei existiert und die E-Mail bereits registriert ist
if (file_exists($file)) {
    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($storedName, $storedEmail) = explode(',', $user);
        if ($storedEmail === $email) {
            die("Diese E-Mail ist bereits registriert.");
        }
    }
}

// Benutzerdaten in die Datei schreiben
$data = "$name,$email,$password\n";
file_put_contents($file, $data, FILE_APPEND);

echo "Registrierung erfolgreich!";
?>