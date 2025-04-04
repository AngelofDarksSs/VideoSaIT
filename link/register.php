<?php
include('db.php');

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        // Criptarea parolei
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Salvarea utilizatorului în baza de date
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->execute(['email' => $email, 'password' => $hashed_password]);

        header('Location: login.php');
        exit();
    } else {
        $error = "Parolele nu se potrivesc!";
    }
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare</title>
</head>
<body>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Parolă:</label>
        <input type="password" name="password" required><br>

        <label for="confirm_password">Confirmă Parola:</label>
        <input type="password" name="confirm_password" required><br>

        <button type="submit" name="register">Înregistrează-te</button>
    </form>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
</body>
</html>
