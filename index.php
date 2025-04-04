<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniDark</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="JS/First.js"></script>
</head>
<body>
    <div id="particles-js"></div>  <!-- Container pentru Particles.js -->
    <div class="header-nav"> 
        <h1>AniDark</h1>
        <nav>
            <a href="#orar">Orarul Serialelor</a>
            <a href="link/Chat.php">Chat</a>
            <a href="link/tech-support.php">Tech Support</a>
            <a href="#link-uri">Link-uri</a>

            <?php if (isset($_SESSION["user_id"]) && !empty($_SESSION["user_id"])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="link/login.php">Login</a>
                <a href="link/register.php">Înregistrare</a>
            <?php endif; ?>

            <!-- Dark Mode Switch -->
            <div class="dark-mode-switch">
                <label>
                    <input type="checkbox" id="darkModeToggle">
                    <span class="switch">
                        <span class="slider"></span>
                    </span>
                </label>
            </div>
        </nav>
    </div>
    
    <main>
        <div class="container">
            <a href="link/jujutsu-kaisen.php" class="card">
                <img src="https://m.media-amazon.com/images/M/MV5BNmI1MmYxNWQtY2E5NC00ZTlmLWIzZGEtNzM1YmE3NDA5NzhjXkEyXkFqcGc@._V1_.jpg" alt="Jujutsu Kaisen">
                <h3>Jujutsu Kaisen</h3>
                <p>Un student de liceu devine parte dintr-o lume secretă a blestemelor și vrăjitorilor.</p>
            </a>
            
            <a href="link/solo-leveling.php" class="card">
                <img src="https://m.media-amazon.com/images/I/81jS951SgDL.jpg" alt="Solo Leveling">
                <h3>Solo Leveling</h3>
                <p>Un vânător slab descoperă un sistem misterios care îl ajută să devină cel mai puternic.</p>
            </a>
            
            <a href="link/one-piece.php" class="card">
                <img src="https://images.justwatch.com/poster/310515848/s718/one-piece.jpg" alt="One Piece">
                <h3>One Piece</h3>
                <p>Aventurile piraților în căutarea comorii supreme, One Piece.</p>
            </a>
        </div>
    </main>    
    <footer>
        © 2025 Seriale Anime - Toate drepturile sunt ale mele.
    </footer>
</body>
</html>
