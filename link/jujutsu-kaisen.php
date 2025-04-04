<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jujutsu Kaisen</title>
    <link rel="stylesheet" href="../CSS/stylelinkjujutsukaisen.css">
</head>
<body>
    <div id="particles-js"></div>  <!-- Container pentru Particles.js -->
    <header>
        <span>Jujutsu Kaisen</span>
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
                src="https://video.sibnet.ru/shell.php?videoid=4273242" 
                frameborder="0" 
                scrolling="no" 
                allowfullscreen>
            </iframe>
        </section>
        
        <div class="episode-selector">
            <label for="episode">Alege episodul:</label>
            <select id="episode">
                <option value="4273242">Episodul 14</option>
                <option value="4273247">Episodul 15</option>
                <option value="4273253">Episodul 16</option>
                <option value="4273259">Episodul 17</option>
            </select>
        </div>
    </main>

    <footer>
        <a href="../index.php">Înapoi la pagina principală</a>
    </footer>

    <!-- Import Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="../JS/particles-config.js"></script>
    <script src="../JS/Video.js"></script>
</body>
</html>
