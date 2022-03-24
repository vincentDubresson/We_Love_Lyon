// Navigation List - Button

const button = document.querySelector(".headerNavButton");
const navDown = document.querySelector(".headerNavMin");

button.addEventListener('click', function() {
    button.classList.toggle("buttonDown");
    navDown.classList.toggle("navDown");
});




        
        