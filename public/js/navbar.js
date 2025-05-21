document.addEventListener("DOMContentLoaded", function () {
    const featuresToggle = document.querySelector(".features-toggle");
    const featuresMenu = document.querySelector(".features");
    const featuresImg = document.querySelector(".features-toggle-img");
    featuresToggle.addEventListener("click", function () {
        if (featuresMenu.style.display === "flex") {
            featuresMenu.style.display = "none";
            featuresImg.style.transform = "rotate(0deg)";
        } else {
            featuresMenu.style.display = "flex";
            featuresImg.style.transform = "rotate(180deg)";
        }
    });

    const SOPToggle = document.querySelector(".sop-toggle");
    const SOPMenu = document.querySelector(".SOP");
    const sopImg = document.querySelector(".sop-toggle-img");
    SOPToggle.addEventListener("click", function () {
        if (SOPMenu.style.display === "flex") {
            SOPMenu.style.display = "none";
            sopImg.style.transform = "rotate(0deg)";
        } else {
            SOPMenu.style.display = "flex";
            sopImg.style.transform = "rotate(180deg)";
        }
    });
});
