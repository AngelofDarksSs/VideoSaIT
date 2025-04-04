<?php
session_start();
require 'db.php'; // Asigură-te că acest fișier conține conexiunea corectă la BD!

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        // Căutăm utilizatorul în baza de date
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Debugging: Afișăm datele găsite
        echo "<pre>";
        print_r($user);
        echo "</pre>";

        if ($user) {
            echo "<p>Utilizator găsit: " . $user['username'] . "</p>";

            // Verificăm parola
            if (password_verify($password, $user['password'])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                
                // Debugging: Verificăm sesiunea
                echo "<pre>";
                print_r($_SESSION);
                echo "</pre>";
                
                // Redirecționează la pagina principală
                header("Location: ../index.php");
                exit;
            } else {
                $error = "Parola incorectă!";
            }
        } else {
            $error = "Email-ul nu este înregistrat!";
        }
    } else {
        $error = "Toate câmpurile sunt obligatorii!";
    }
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <form action="login.php" method="POST">
        <h2>Autentificare</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <label>Email:</label>
        <input type="email" name="email" required>
        
        <label>Parolă:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
