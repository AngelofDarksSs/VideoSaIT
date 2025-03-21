document.addEventListener("DOMContentLoaded", function () {
    const toggleSwitch = document.querySelector("#dark-mode-toggle");
    const body = document.body;
    const episodeSelector = document.getElementById("episode");
    const videoFrame = document.getElementById("video-frame");

    // Verifică preferința utilizatorului pentru tema
    if (localStorage.getItem("theme") === "light") {
        body.classList.add("light-mode");
        toggleSwitch.checked = true;
    }

    // Schimbă tema când utilizatorul comută switch-ul
    toggleSwitch.addEventListener("change", function () {
        if (this.checked) {
            body.classList.add("light-mode");
            localStorage.setItem("theme", "light");
        } else {
            body.classList.remove("light-mode");
            localStorage.setItem("theme", "dark");
        }
    });

    // Schimbă episodul selectat
    episodeSelector.addEventListener("change", function () {
        videoFrame.src = "https://video.sibnet.ru/shell.php?videoid=" + this.value;
    });
});
