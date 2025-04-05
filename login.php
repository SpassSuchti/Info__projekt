<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Amaphone - Anmeldung</title>
</head>
<body>
    <header>
        <h1>Anmeldung</h1>
    </header>
    <main>
        <form action="login_process.php" method="POST">
            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Passwort:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Anmelden</button>
        </form>
    </main>
</body>
</html>