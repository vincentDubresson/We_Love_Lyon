const button = document.querySelector(".headerNavButton");

button.addEventListener("click", function() {
    if (button.style.transition === "rotate(180deg)")
    {
        button.style.transform = "rotate(180deg)";
        button.style.transform = "0.5s";
    } else {
        button.style.transform = "rotate(-180deg)";
        button.style.transition = "0.5s";    
    }
});