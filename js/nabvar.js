// Panel de perfil
const profileMenu = document.getElementById("profileMenu");
const profileBtn = document.querySelector(".profileIcon");

profileBtn.addEventListener("click", function() {
    profileMenu.classList.toggle("show");
    // Asegura que el desbordamiento sea visible tras el tiempo de animación
    setTimeout(() => {
        profileMenu.style.overflow = "visible";
    }, 300);
    profileMenu.style.overflow = "hidden";
});

document.addEventListener("click", function(e) {
    if (e.target !== profileBtn && !profileMenu.contains(e.target)) {
        profileMenu.classList.remove("show");
    }
});

// Menú de hamburguesa
const hamburger = document.querySelector(".hambargar");
const navList = document.querySelector(".hero nav ul");

const mediaQuery = window.matchMedia("(max-width: 700px)");

mediaQuery.addEventListener("change", function() {
    if (!mediaQuery.matches) {
        navList.classList.remove("show");
        hamburger.classList.remove("active");
    }
});

hamburger.addEventListener("click", function() {
    navList.classList.toggle("show");
    hamburger.classList.toggle("active");
});

document.addEventListener("click", function(e) {
    if (e.target !== hamburger && !navList.contains(e.target)) {
        navList.classList.remove("show");
        hamburger.classList.remove("active");
    }
});
