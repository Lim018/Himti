document.addEventListener("DOMContentLoaded", function () {
    let screenWidth = window.innerWidth;

    if (screenWidth <= 600) {
        let mid = document.getElementById("mid");
        let copyright = document.getElementById("copyright");

        let copyrightnew = document.createElement("p");
        copyrightnew.innerHTML = `©2025 HIMPUNAN MAHASISWA TEKNIK INFORMATIKA`;
        copyrightnew.id = "copyright";

        document.getElementById("right").appendChild(copyrightnew);

        copyright.style.display = "none";
    }
});
