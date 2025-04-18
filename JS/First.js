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

    // Inițializare Particles.js
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle"
            },
            "opacity": {
                "value": 0.5,
                "random": false
            },
            "size": {
                "value": 3,
                "random": true
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 2,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out"
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                }
            },
            "modes": {
                "repulse": {
                    "distance": 100,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                }
            }
        },
        "retina_detect": true
    });

    // Actualizare culori la schimbarea modului dark/light
    function updateParticlesColor() {
        const particlesColor = toggleSwitch.checked ? "#000000" : "#ffffff";
        pJSDom[0].pJS.particles.color.value = particlesColor;
        pJSDom[0].pJS.particles.line_linked.color = particlesColor;
        pJSDom[0].pJS.fn.particlesRefresh();
    }

    toggleSwitch.addEventListener("change", updateParticlesColor);
    
});
