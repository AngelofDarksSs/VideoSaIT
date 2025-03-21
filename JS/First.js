document.addEventListener("DOMContentLoaded", function () {
    const toggleSwitch = document.getElementById("darkModeToggle");
    const body = document.body;
    const headerNav = document.querySelector(".header-nav");
    const footer = document.querySelector("footer");

    // Verificăm dacă dark mode este activat în localStorage
    const darkModeEnabled = localStorage.getItem("darkMode") === "enabled";

    if (darkModeEnabled) {
        body.classList.add("light-mode");
        headerNav.classList.add("light-mode");
        footer.classList.add("light-mode");
        toggleSwitch.checked = true;
    } else {
        body.classList.remove("light-mode");
        headerNav.classList.remove("light-mode");
        footer.classList.remove("light-mode");
        toggleSwitch.checked = false;
    }

    // Când schimbăm switch-ul
    toggleSwitch.addEventListener("change", function () {
        if (toggleSwitch.checked) {
            body.classList.add("light-mode");
            headerNav.classList.add("light-mode");
            footer.classList.add("light-mode");
            localStorage.setItem("darkMode", "enabled");
        } else {
            body.classList.remove("light-mode");
            headerNav.classList.remove("light-mode");
            footer.classList.remove("light-mode");
            localStorage.setItem("darkMode", "disabled");
        }
    });
});
