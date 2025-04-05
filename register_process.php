<?php
$file = 'users.txt';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if (file_exists($file)) {
    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($storedName, $storedEmail) = explode(',', $user);
        if ($storedEmail === $email) {
            die("Diese E-Mail ist bereits registriert.");
        }
    }
}

$data = "$name,$email,$password\n";
file_put_contents($file, $data, FILE_APPEND);

session_start();
$_SESSION['user'] = $name; // Benutzername in der Sitzung speichern
$_SESSION['email'] = $email; // E-Mail in der Sitzung speichern
header("Location: index.php"); // Weiterleitung zur Startseite
?>