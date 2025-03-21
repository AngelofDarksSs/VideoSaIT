document.addEventListener("DOMContentLoaded", () => {
    const themeToggle = document.getElementById("theme-toggle");
    const body = document.body;
    const videoFrame = document.getElementById("video-frame");
    const episodeSelect = document.getElementById("episode");

    // Verifică tema salvată în localStorage
    if (localStorage.getItem("theme") === "light") {
        body.classList.add("light-mode");
        themeToggle.checked = true;
    }

    // La schimbarea switch-ului, schimbă tema
    themeToggle.addEventListener("change", () => {
        if (themeToggle.checked) {
            body.classList.add("light-mode");
            localStorage.setItem("theme", "light");
        } else {
            body.classList.remove("light-mode");
            localStorage.setItem("theme", "dark");
        }
    });

    // Schimbă episodul când se selectează altul
    episodeSelect.addEventListener("change", () => {
        videoFrame.src = "https://video.sibnet.ru/shell.php?videoid=" + episodeSelect.value;
    });
});
