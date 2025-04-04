<?php
session_start();
session_destroy();
header("Location: ../index.php"); // Redirecționează la pagina principală după delogare
exit();
?>
