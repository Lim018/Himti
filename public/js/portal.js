document.addEventListener("DOMContentLoaded", function () {
    const dots = document.querySelectorAll(".pagination-dots .dot");
    const items = document.querySelectorAll(".update-content .update-item");
    dots.forEach((dot, idx) => {
        dot.addEventListener("click", function () {
            dots.forEach((d) => d.classList.remove("active"));
            dot.classList.add("active");
            items.forEach((item, i) => {
                item.style.display = i === idx ? "" : "none";
            });
        });
    });

    let index = 6;
    function showMore() {
        const cards = document.querySelectorAll(".info-card-item");
        let shown = 0;
        for (let i = index; i < cards.length && shown < 6; i++, shown++) {
            cards[i].style.display = "block";
        }
        index += shown;
        if (index >= cards.length) {
            document.querySelector(".show-more-btn").style.display = "none";
        }
    }

    document
        .querySelector(".show-more-btn")
        .addEventListener("click", showMore);
});
