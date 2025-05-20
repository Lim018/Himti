// Import AOS library
import AOS from "aos"

// Initialize AOS (Animate On Scroll)
document.addEventListener("DOMContentLoaded", () => {
  // Initialize AOS
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
  })

  // Navbar scroll effect
  const navbar = document.querySelector(".navbar")
  if (navbar) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.style.padding = "10px 0"
        navbar.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)"
      } else {
        navbar.style.padding = "15px 0"
        navbar.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.05)"
      }
    })
  }

  // Add ripple effect to buttons
  const buttons = document.querySelectorAll("button, .divisi-card")
  buttons.forEach((button) => {
    button.addEventListener("click", function (e) {
      const x = e.clientX - this.getBoundingClientRect().left
      const y = e.clientY - this.getBoundingClientRect().top

      const ripple = document.createElement("span")
      ripple.classList.add("ripple")
      ripple.style.left = x + "px"
      ripple.style.top = y + "px"

      this.appendChild(ripple)

      setTimeout(() => {
        ripple.remove()
      }, 600)
    })
  })

  // Smooth scroll for navigation links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()

      const targetId = this.getAttribute("href")
      if (targetId === "#") return

      const targetElement = document.querySelector(targetId)
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })
})

// Add CSS for ripple effect
document.addEventListener("DOMContentLoaded", () => {
  const style = document.createElement("style")
  style.textContent = `
    .ripple {
        position: absolute;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
  `
  document.head.appendChild(style)
})
