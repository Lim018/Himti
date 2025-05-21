document.addEventListener("DOMContentLoaded", () => {
    // Declare AOS variable
    const AOS = window.AOS
  
    // Initialize AOS (Animate On Scroll)
    AOS.init({
      duration: 800,
      easing: "ease-in-out",
      once: true,
    })
  
    // Mobile Menu Toggle
    const menuToggle = document.querySelector(".navbar-toggler")
    const navbarCollapse = document.querySelector(".navbar-collapse")
  
    if (menuToggle) {
      menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active")
      })
    }
  
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault()
  
        const targetId = this.getAttribute("href")
        if (targetId === "#") return
  
        const targetElement = document.querySelector(targetId)
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 100,
            behavior: "smooth",
          })
        }
      })
    })
  
    // Parallax effect for background patterns
    window.addEventListener("scroll", () => {
      const scrollPosition = window.pageYOffset
      const patterns = document.querySelectorAll(".pattern-right")
  
      patterns.forEach((pattern) => {
        if (pattern) {
          pattern.style.transform = `translateY(${scrollPosition * 0.1}px)`
        }
      })
    })
  
    // Program cards hover effect
    const programCards = document.querySelectorAll(".program-card")
    programCards.forEach((card) => {
      card.addEventListener("mouseenter", function () {
        this.classList.add("card-hover")
      })
  
      card.addEventListener("mouseleave", function () {
        this.classList.remove("card-hover")
      })
    })
  
    // Back to top button
    const backToTopBtn = document.getElementById("back-to-top")
    if (backToTopBtn) {
      window.addEventListener("scroll", () => {
        if (window.pageYOffset > 300) {
          backToTopBtn.classList.add("show")
        } else {
          backToTopBtn.classList.remove("show")
        }
      })
  
      backToTopBtn.addEventListener("click", () => {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        })
      })
    }
  
    // Animated counters for statistics
    const counters = document.querySelectorAll(".counter")
    if (counters.length > 0) {
      const counterObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const counter = entry.target
              const target = Number.parseInt(counter.getAttribute("data-target"))
              let count = 0
              const updateCounter = () => {
                const increment = target / 100
                if (count < target) {
                  count += increment
                  counter.innerText = Math.ceil(count)
                  setTimeout(updateCounter, 10)
                } else {
                  counter.innerText = target
                }
              }
              updateCounter()
              observer.unobserve(counter)
            }
          })
        },
        { threshold: 0.5 },
      )
  
      counters.forEach((counter) => {
        counterObserver.observe(counter)
      })
    }
  
    // Image gallery lightbox
    const galleryItems = document.querySelectorAll(".gallery-item")
    if (galleryItems.length > 0) {
      galleryItems.forEach((item) => {
        item.addEventListener("click", function () {
          const imgSrc = this.querySelector("img").getAttribute("src")
          const lightbox = document.createElement("div")
          lightbox.classList.add("lightbox")
          lightbox.innerHTML = `
                      <div class="lightbox-content">
                          <img src="${imgSrc}" alt="Gallery Image">
                          <span class="lightbox-close">&times;</span>
                      </div>
                  `
          document.body.appendChild(lightbox)
  
          lightbox.querySelector(".lightbox-close").addEventListener("click", () => {
            document.body.removeChild(lightbox)
          })
  
          lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox) {
              document.body.removeChild(lightbox)
            }
          })
        })
      })
    }
  
    // Typing effect for taglines
    const typingElements = document.querySelectorAll(".typing-effect")
    if (typingElements.length > 0) {
      typingElements.forEach((element) => {
        const text = element.getAttribute("data-text")
        if (text) {
          let i = 0
          element.innerHTML = ""
  
          function typeWriter() {
            if (i < text.length) {
              element.innerHTML += text.charAt(i)
              i++
              setTimeout(typeWriter, 100)
            }
          }
  
          // Start typing when element is in view
          const typingObserver = new IntersectionObserver(
            (entries) => {
              entries.forEach((entry) => {
                if (entry.isIntersecting) {
                  setTimeout(typeWriter, 500)
                  typingObserver.unobserve(element)
                }
              })
            },
            { threshold: 0.5 },
          )
  
          typingObserver.observe(element)
        }
      })
    }
  })
  