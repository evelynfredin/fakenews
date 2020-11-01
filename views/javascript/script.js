/* Mobile navigation
   ========================================================================== */
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const hearts = document.getElementsByClassName('fa-heart');

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("open");
});

for(let i = 0; i < hearts.length; i++){
    hearts[i].addEventListener('click', () => {
        hearts[i].classList.toggle("red");
    });
};
