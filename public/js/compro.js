document.addEventListener("DOMContentLoaded", () => {
    initLoadAnimations();
    initScrollAnimations();
    initHeroEffects();
    initSmoothScrolling();
});

function initLoadAnimations() {
    const elementsToAnimate = document.querySelectorAll('.animate-load');
    elementsToAnimate.forEach(el => {
        const delay = parseInt(el.dataset.delay || "0", 10);
        setTimeout(() => {
            el.classList.add('is-visible');
        }, delay);
    });
}

function initScrollAnimations() {
    const elementsToAnimate = document.querySelectorAll('.animate');

    if (!("IntersectionObserver" in window)) {
        elementsToAnimate.forEach(el => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            const el = entry.target;
            const delay = parseInt(el.dataset.delay || "0", 10);

            if (entry.isIntersecting) {
                setTimeout(() => {
                    el.classList.add('is-visible');
                }, delay);
            } else {
                el.classList.remove('is-visible');
            }
        });
    }, {
        threshold: 0.1 
    });

    elementsToAnimate.forEach(el => {
        observer.observe(el);
    });
}



function initHeroEffects() {
    const heroLeft = document.querySelector(".hero .left");
    const heroButton = document.querySelector(".hero .left button");

    if (heroLeft) {
        heroLeft.style.animation = "float 5s ease-in-out infinite";
    }

    window.addEventListener('scroll', () => {
        if (heroLeft) {
            const scrollY = window.pageYOffset;
            heroLeft.style.transform = `translate3d(0, ${scrollY * 0.2}px, 0)`;
        }
    }, { passive: true });

    if (heroButton) {
        heroButton.addEventListener("click", function (e) {
            const oldRipple = this.querySelector('.ripple');
            if (oldRipple) oldRipple.remove();

            const rect = this.getBoundingClientRect();
            const ripple = document.createElement("span");

            ripple.className = 'ripple';
            ripple.style.left = `${e.clientX - rect.left}px`;
            ripple.style.top = `${e.clientY - rect.top}px`;

            this.appendChild(ripple);
            
            ripple.addEventListener('animationend', () => ripple.remove());

            document.querySelector('.desc')?.scrollIntoView({ behavior: 'smooth' });
        });
    }
}

function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}