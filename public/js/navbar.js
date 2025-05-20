document.addEventListener("DOMContentLoaded", function () {
    const menu = document.getElementById("menu");

    let screenWidth = window.innerWidth;

    if (screenWidth <= 600) {
        let nav = document.getElementById("nav");
        let menuButton = document.createElement("button");
        menuButton.innerHTML = "<img src='assets/hamburger.svg' alt='menu'/>";
        menuButton.id = "menu_button";
        menuButton.onclick = function () {
            if (nav.style.height === "11vh") {
                nav.style.height = "7.4lvh";
                nav.style.maxHeight = "7.4vh";
            } else {
                nav.style.height = "11vh";
                nav.style.maxHeight = "11vh";
            }
        };
        const navDiv = document.getElementById("navdiv");
        navDiv.appendChild(menuButton);
    }
});
