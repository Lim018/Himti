document.addEventListener("DOMContentLoaded", () => {
  // Initialize all interactive features
  initScrollAnimations()
  initHeroAnimations()
  initTypingEffect()
  initParallaxEffects()
  initHoverEffects()
  initSmoothScrolling()
  initCounterAnimations()
  initCardAnimations()
  initBackgroundAnimations()
  initMouseFollowEffects()
})

// Scroll-triggered animations
function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in")

        // Special handling for different sections
        if (entry.target.classList.contains("desc")) {
          animateDescSection()
        } else if (entry.target.classList.contains("vision-section")) {
          animateVisionSection()
        } else if (entry.target.classList.contains("mission-section")) {
          animateMissionSection()
        } else if (entry.target.id === "filosofi") {
          animatePhilosophySection()
        }
      }
    })
  }, observerOptions)

  // Observe all main sections
  document.querySelectorAll(".desc, .vision-section, .mission-section, #filosofi").forEach((section) => {
    observer.observe(section)
  })
}

// Hero section animations
function initHeroAnimations() {
  const heroLeft = document.querySelector(".hero .left");
  const heroRight = document.querySelector(".hero .right");
  const heroTitle = document.querySelector(".hero .left h1");
  const heroSubtitle = document.querySelector(".hero .left p");
  const heroButton = document.querySelector(".hero .left button");

  // Animate hero elements on load
  setTimeout(() => {
    if (heroTitle) {
      heroTitle.style.opacity = "0";
      heroTitle.style.transform = "translateY(50px)";
      heroTitle.style.transition = "all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275)";

      setTimeout(() => {
        heroTitle.style.opacity = "1";
        heroTitle.style.transform = "translateY(0)";
      }, 300);
    }

    if (heroSubtitle) {
      heroSubtitle.style.opacity = "0";
      heroSubtitle.style.transform = "translateY(30px)";
      heroSubtitle.style.transition = "all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275)";

      setTimeout(() => {
        heroSubtitle.style.opacity = "1";
        heroSubtitle.style.transform = "translateY(0)";
      }, 600);
    }

    if (heroButton) {
      heroButton.style.opacity = "0";
      heroButton.style.transform = "translateY(20px) scale(0.9)";
      heroButton.style.transition = "all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)";

      setTimeout(() => {
        heroButton.style.opacity = "1";
        heroButton.style.transform = "translateY(0) scale(1)";
      }, 900);
    }
  }, 100);

  // Button hover effects
  if (heroButton) {
    heroButton.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-3px) scale(1.05)";
      this.style.boxShadow = "0 10px 25px rgba(0, 123, 255, 0.3)";
    });

    heroButton.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0) scale(1)";
      this.style.boxShadow = "none";
    });

    heroButton.addEventListener("click", function (e) {
      e.preventDefault();

      // Create ripple effect
      const ripple = document.createElement("span");
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.width = ripple.style.height = size + "px";
      ripple.style.left = x + "px";
      ripple.style.top = y + "px";
      ripple.style.position = "absolute";
      ripple.style.borderRadius = "50%";
      ripple.style.background = "rgba(255, 255, 255, 0.6)";
      ripple.style.transform = "scale(0)";
      ripple.style.animation = "ripple 0.6s linear";
      ripple.style.pointerEvents = "none";

      this.style.position = "relative";
      this.style.overflow = "hidden";
      this.appendChild(ripple);

      setTimeout(() => {
        ripple.remove();
      }, 600);

      // Smooth scroll to about section
      const aboutSection = document.querySelector(".desc");
      if (aboutSection) {
        aboutSection.scrollIntoView({ behavior: "smooth" });
      }
    });
  }
}

// Typing effect for motto
function initTypingEffect() {
  const motto = document.querySelector(".motto")
  if (!motto) return

  const originalText = motto.textContent
  motto.textContent = ""
  motto.style.borderRight = "2px solid #608bc0"
//   motto.style.animation = "blink 1s infinite"

  let index = 0
  const typeSpeed = 100

  function typeText() {
    if (index < originalText.length) {
      motto.textContent += originalText.charAt(index)
      index++
      setTimeout(typeText, typeSpeed)
    } else {
      setTimeout(() => {
        motto.style.borderRight = "none"
        motto.style.animation = "none"
      }, 1000)
    }
  }

  // Start typing when element is visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        setTimeout(typeText, 500)
        observer.unobserve(entry.target)
      }
    })
  })

  observer.observe(motto)
}

// Parallax effects
function initParallaxEffects() {
  const heroLeft = document.querySelector(".hero .left");
  const heroRight = document.querySelector(".hero .right");

  if (heroLeft && heroRight) {
    let lastScrollY = window.pageYOffset;

    // Update scroll position with throttling
    let ticking = false;
    window.addEventListener("scroll", () => {
      if (!ticking) {
        requestAnimationFrame(() => {
          lastScrollY = window.pageYOffset;
          ticking = false;
        });
        ticking = true;
      }
    });

    // Combined floating and parallax animation
    const animate = () => {
      const floatOffset = Math.sin(Date.now() * 0.001) * 10; // Floating effect
      const parallaxLeft = lastScrollY * 0.5; // Parallax speed for heroLeft
      const parallaxRight = lastScrollY * 0.5; // Same speed for heroRight to align

      // Combine floating and parallax transforms
      heroLeft.style.transform = `translateY(${floatOffset + parallaxLeft}px)`;
      heroRight.style.transform = `translateY(${floatOffset + parallaxRight}px)`;

      requestAnimationFrame(animate);
    };
    requestAnimationFrame(animate);
  }

  // Parallax for vision section background
  window.addEventListener("scroll", () => {
    const visionSection = document.querySelector(".vision-section");
    if (visionSection) {
      const rect = visionSection.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        const offset = (window.innerHeight - rect.top) * 0.1;
        visionSection.style.backgroundPosition = `center ${offset}px`;
      }
    }
  });
}

// Hover effects for interactive elements
function initHoverEffects() {
  // Philosophy cards hover effects
  const cards = document.querySelectorAll(".flsfcards")
  cards.forEach((card) => {
    card.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-10px) scale(1.02)"
      this.style.boxShadow = "0 15px 30px rgba(0, 0, 0, 0.2)"
      this.style.transition = "all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

      // Animate card image
      const img = this.querySelector("img")
      if (img) {
        img.style.transform = "scale(1.1) rotate(5deg)"
        img.style.transition = "all 0.3s ease"
      }
    })

    card.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0) scale(1)"
      this.style.boxShadow = "0px 0px 3px 1px rgba(0, 0, 0, 0.2)"

      const img = this.querySelector("img")
      if (img) {
        img.style.transform = "scale(1) rotate(0deg)"
      }
    })
  })

  // Text box hover effects
  const textBox = document.querySelector(".textbox")
  if (textBox) {
    textBox.addEventListener("mouseenter", function () {
      this.style.transform = "translateX(-22px) translateY(-5px)"
      this.style.boxShadow = "0 10px 25px rgba(0, 0, 0, 0.15)"
      this.style.transition = "all 0.3s ease"
    })

    textBox.addEventListener("mouseleave", function () {
      this.style.transform = "translateX(-22px) translateY(0)"
      this.style.boxShadow = "0px 0px 3px 1px rgba(0, 0, 0, 0.2)"
    })
  }
}

// Smooth scrolling for navigation
function initSmoothScrolling() {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })
}

// Counter animations for statistics
function initCounterAnimations() {
  function animateCounter(element, target, duration = 2000) {
    let start = 0
    const increment = target / (duration / 16)

    function updateCounter() {
      start += increment
      if (start < target) {
        element.textContent = Math.floor(start)
        requestAnimationFrame(updateCounter)
      } else {
        element.textContent = target
      }
    }

    updateCounter()
  }

  // Add counters if needed (can be extended)
  const counters = document.querySelectorAll("[data-counter]")
  counters.forEach((counter) => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const target = Number.parseInt(counter.getAttribute("data-counter"))
          animateCounter(counter, target)
          observer.unobserve(entry.target)
        }
      })
    })
    observer.observe(counter)
  })
}

// Card animations
function initCardAnimations() {
  const cards = document.querySelectorAll(".flsfcards")

  cards.forEach((card, index) => {
    card.style.opacity = "0"
    card.style.transform = "translateY(50px)"
    card.style.transition = `all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) ${index * 0.2}s`
  })

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const cards = entry.target.querySelectorAll(".flsfcards")
        cards.forEach((card, index) => {
          setTimeout(() => {
            card.style.opacity = "1"
            card.style.transform = "translateY(0)"
          }, index * 200)
        })
        observer.unobserve(entry.target)
      }
    })
  })

  const philosophySection = document.getElementById("filosofi")
  if (philosophySection) {
    observer.observe(philosophySection)
  }
}

// Background animations
function initBackgroundAnimations() {
  // Animated gradient for vision section
  const visionSection = document.querySelector(".vision-section")
  if (visionSection) {
    let gradientPosition = 0
    setInterval(() => {
      gradientPosition += 0.5
      visionSection.style.backgroundPosition = `${gradientPosition}% 50%`
    }, 100)
  }

  // Floating particles effect
  createFloatingParticles()
}

// Mouse follow effects
function initMouseFollowEffects() {
  let mouseX = 0
  let mouseY = 0

  document.addEventListener("mousemove", (e) => {
    mouseX = e.clientX
    mouseY = e.clientY
  })

  // Subtle parallax effect for logo
  const logoElements = document.querySelectorAll(".logo_kabinet_desc, #flsfleft")

  function updateLogoPosition() {
    const centerX = window.innerWidth / 2
    const centerY = window.innerHeight / 2
    const deltaX = (mouseX - centerX) / centerX
    const deltaY = (mouseY - centerY) / centerY

    logoElements.forEach((logo) => {
      if (logo) {
        logo.style.transform = `translate(${deltaX * 10}px, ${deltaY * 10}px)`
        logo.style.transition = "transform 0.1s ease-out"
      }
    })

    requestAnimationFrame(updateLogoPosition)
  }

  updateLogoPosition()
}

// Section-specific animations
function animateDescSection() {
  const photoFrame = document.querySelector(".photoframe")
  const textBox = document.querySelector(".textbox")
  const kadepImg = document.querySelector(".kadep")

  if (photoFrame) {
    photoFrame.style.transform = "translateX(22px) scale(0.9)"
    photoFrame.style.opacity = "0"
    photoFrame.style.transition = "all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(() => {
      photoFrame.style.transform = "translateX(22px) scale(1)"
      photoFrame.style.opacity = "1"
    }, 200)
  }

  if (textBox) {
    textBox.style.transform = "translateX(-22px) translateY(50px)"
    textBox.style.opacity = "0"
    textBox.style.transition = "all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(() => {
      textBox.style.transform = "translateX(-22px) translateY(0)"
      textBox.style.opacity = "1"
    }, 400)
  }

  if (kadepImg) {
    kadepImg.style.transform = "scale(1.1)"
    kadepImg.style.transition = "all 1s ease"

    setTimeout(() => {
      kadepImg.style.transform = "scale(1)"
    }, 600)
  }
}

function animateVisionSection() {
  const title = document.querySelector(".vision-title")
  const content = document.querySelector(".vision-content")

  if (title) {
    title.style.transform = "translateX(-100px)"
    title.style.opacity = "0"
    title.style.transition = "all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(() => {
      title.style.transform = "translateX(0)"
      title.style.opacity = "1"
    }, 300)
  }

  if (content) {
    content.style.transform = "translateX(100px)"
    content.style.opacity = "0"
    content.style.transition = "all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(() => {
      content.style.transform = "translateX(0)"
      content.style.opacity = "1"
    }, 500)
  }
}

function animateMissionSection() {
  const title = document.querySelector(".mission-title")
  const texts = document.querySelectorAll(".mission-text")

  if (title) {
    title.style.transform = "translateY(-50px)"
    title.style.opacity = "0"
    title.style.transition = "all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(() => {
      title.style.transform = "translateY(0)"
      title.style.opacity = "1"
    }, 200)
  }

  texts.forEach((text, index) => {
    text.style.transform = "translateY(30px)"
    text.style.opacity = "0"
    text.style.transition = "all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(
      () => {
        text.style.transform = "translateY(0)"
        text.style.opacity = "1"
      },
      400 + index * 200,
    )
  })
}

function animatePhilosophySection() {
  const title = document.querySelector("#flsftop")
  const logo = document.querySelector("#flsfleft")

  if (title) {
    title.style.transform = "translateY(-30px)"
    title.style.opacity = "0"
    title.style.transition = "all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(() => {
      title.style.transform = "translateY(0)"
      title.style.opacity = "1"
    }, 200)
  }

  if (logo) {
    logo.style.transform = "scale(0.8) rotate(-10deg)"
    logo.style.opacity = "0"
    logo.style.transition = "all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275)"

    setTimeout(() => {
      logo.style.transform = "scale(1) rotate(0deg)"
      logo.style.opacity = "1"
    }, 400)
  }
}

// Create floating particles
function createFloatingParticles() {
  const particleCount = 20
  const particles = []

  for (let i = 0; i < particleCount; i++) {
    const particle = document.createElement("div")
    particle.className = "floating-particle"
    particle.style.cssText = `
            position: fixed;
            width: ${Math.random() * 4 + 2}px;
            height: ${Math.random() * 4 + 2}px;
            background-color: rgba(96, 139, 192, ${Math.random() * 0.3 + 0.1});
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            left: ${Math.random() * 100}vw;
            top: ${Math.random() * 100}vh;
        `

    document.body.appendChild(particle)
    particles.push({
      element: particle,
      x: Math.random() * window.innerWidth,
      y: Math.random() * window.innerHeight,
      vx: (Math.random() - 0.5) * 0.5,
      vy: (Math.random() - 0.5) * 0.5,
    })
  }

  function animateParticles() {
    particles.forEach((particle) => {
      particle.x += particle.vx
      particle.y += particle.vy

      if (particle.x < 0 || particle.x > window.innerWidth) particle.vx *= -1
      if (particle.y < 0 || particle.y > window.innerHeight) particle.vy *= -1

      particle.element.style.left = particle.x + "px"
      particle.element.style.top = particle.y + "px"
    })

    requestAnimationFrame(animateParticles)
  }

  animateParticles()
}

// Add CSS animations
const style = document.createElement("style")
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    @keyframes blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }
    
    .animate-in {
        animation: fadeInUp 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .floating-particle {
        transition: all 0.1s ease-out;
    }
    
    .hero .left button {
        position: relative;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .flsfcards {
        cursor: pointer;
    }
    
    .textbox {
        cursor: pointer;
    }
`

document.head.appendChild(style)
