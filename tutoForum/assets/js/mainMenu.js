//Menu burger
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navMenu-ul");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

//Ferme le menu quand clic sur liens
const navLink = document.querySelectorAll(".navMenu-li");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}