document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;
    const themeToggle = document.getElementById("theme-toggle");
    const storedTheme = localStorage.getItem("theme") || "dark";

    // Aplică tema salvată
    if (storedTheme === "light") {
        body.classList.add("light-mode");
        themeToggle.checked = true;
    } else {
        body.classList.remove("light-mode");
        themeToggle.checked = false;
    }
    
    // Încărcare inițială a particulelor
    loadParticles(storedTheme);

    // Event listener pentru toggle
    themeToggle.addEventListener("change", () => {
        if (themeToggle.checked) {
            body.classList.add("light-mode");
            localStorage.setItem("theme", "light");
            loadParticles("light");
        } else {
            body.classList.remove("light-mode");
            localStorage.setItem("theme", "dark");
            loadParticles("dark");
        }
    });
});

// Funcție pentru încărcarea particulelor în funcție de temă
function loadParticles(theme) {
    particlesJS("particles-js", {
        particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: theme === "light" ? "#6a0dad" : "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.7, random: false },
            size: { value: 3, random: true },
            line_linked: {
                enable: true,
                distance: 150,
                color: theme === "light" ? "#6a0dad" : "#ffffff",
                opacity: 0.5,
                width: 1,
            },
            move: {
                enable: true,
                speed: 3,
                direction: "none",
                random: false,
                straight: false,
                out_mode: "out",
            },
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: { enable: true, mode: "repulse" },
                onclick: { enable: true, mode: "push" },
            },
            modes: {
                repulse: { distance: 100, duration: 0.4 },
                push: { particles_nb: 4 },
            },
        },
        retina_detect: true,
    });
}
