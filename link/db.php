<?php
// Setările de conectare la baza de date
$host = 'localhost'; // Adresa serverului MySQL
$dbname = 'users_db'; // Numele bazei de date
$username = 'root'; // Utilizatorul MySQL (implicit 'root' în XAMPP)
$password = ''; // Parola (implicit este goală în XAMPP)

// Conectarea la baza de date
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Setează erorile PDO pentru a le arăta
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conectarea la baza de date a eșuat: " . $e->getMessage());
}
?>
