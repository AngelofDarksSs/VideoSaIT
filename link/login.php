<?php
session_start();
include('db.php'); // Include fișierul de conectare la baza de date

if (isset($_POST['login'])) {
    // Preia datele din formular
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Căutăm utilizatorul în baza de date
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Dacă există utilizatorul și parola este corectă
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php'); // Redirecționează către pagina principală
    } else {
        $error = "Email sau parolă greșite!";
    }
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="password">Parolă:</label>
        <input type="password" name="password" required><br>

        <button type="submit" name="login">Autentifică-te</button>
    </form>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
</body>
</html>
