<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $anime_name = trim($_POST["anime_name"] ?? '');
    $anime_reason = trim($_POST["anime_reason"] ?? '');

    if (!empty($anime_name) && !empty($anime_reason)) {
        // Salvare în fișier
        $entry = date("Y-m-d H:i:s") . " | $anime_name: $anime_reason\n";
        file_put_contents("sugestii.txt", $entry, FILE_APPEND);
        echo "Sugestia ta a fost trimisă cu succes!";
    } else {
        echo "Te rugăm să completezi toate câmpurile.";
    }
} else {
    echo "Cerere invalidă.";
}
?>
