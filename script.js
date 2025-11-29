// Menu mobile (si vous ajoutez un menu)
function toggleMenu() {
    let menu = document.getElementById("menu");
    menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
}
// Exemple d’animation simple
window.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    header.classList.toggle("scrolled", window.scrollY > 10);
});

particlesJS("particles-js", {
  "particles": {
    "number": {"value": 80},
    "size": {"value": 3},
    "move": {"speed": 2}
  }
});

let slides = document.querySelectorAll(".slide");
let index = 0;

function showSlide() {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[index].classList.add("active");
    index = (index + 1) % slides.length;
}

// Changement chaque 1 seconde
setInterval(showSlide, 1000);
