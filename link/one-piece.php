<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Piece</title>
    <link rel="stylesheet" href="../CSS/stylelinkonepiece.css">
</head>
<body>
    <div id="particles-js"></div>  <!-- Container pentru Particles.js -->
    <header>
        <span>One Piece</span>
        <label class="switch">
            <input type="checkbox" id="theme-toggle">
            <span class="slider round"></span>
        </label>
    </header>

    <main class="container">
        <section class="video-player">
            <iframe 
                id="video-frame"
                width="640" 
                height="384" 
                src="https://video.sibnet.ru/shell.php?videoid=1155564" 
                frameborder="0" 
                scrolling="no" 
                allowfullscreen>
            </iframe>
        </section>
        
        <div class="episode-selector">
            <label for="episode">Alege episodul:</label>
            <select id="episode">
                <option value="1155564">Episodul 1</option>
                <option value="1155565">Episodul 2</option>
                <option value="1155567">Episodul 3</option>
                <option value="1155568">Episodul 4</option>
                <option value="1155579">Episodul 5</option>
                <option value="1155570">Episodul 6</option>
                <option value="1155572">Episodul 7</option>
                <option value="1155573">Episodul 8</option>
            </select>
        </div>
    </main>

    <footer>
        <a href="../index.php">Înapoi la pagina principală</a>
    </footer>

    <!-- Import Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="../JS/particles-config.js"></script>
    <script src="../JS/Video2.js"></script>
</body>
</html>
