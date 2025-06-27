@extends('layouts.app')

@section('title', 'Coming Soon - HIMTI Teknik Informatika')

@section('content')
<div class="coming-soon-page">
    <div class="animated-background">
        <div class="gear gear-1"></div>
        <div class="gear gear-2"></div>
        <div class="gear gear-3"></div>
        <div class="floating-particle particle-1"></div>
        <div class="floating-particle particle-2"></div>
        <div class="floating-particle particle-3"></div>
        <div class="floating-particle particle-4"></div>
        <div class="floating-particle particle-5"></div>
        <div class="floating-particle particle-6"></div>
        <div class="circuit-line line-1"></div>
        <div class="circuit-line line-2"></div>
        <div class="circuit-line line-3"></div>
        <div class="circuit-dot dot-1"></div>
        <div class="circuit-dot dot-2"></div>
        <div class="circuit-dot dot-3"></div>
    </div>


    <main class="container coming-soon-content">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <div class="coming-soon-container" data-aos="zoom-in">
                    <h1 class="coming-soon-title">
                        <span class="title-letter">C</span>
                        <span class="title-letter">O</span>
                        <span class="title-letter">M</span>
                        <span class="title-letter">I</span>
                        <span class="title-letter">N</span>
                        <span class="title-letter">G</span>
                        <span class="title-letter space"> </span>
                        <span class="title-letter">S</span>
                        <span class="title-letter">O</span>
                        <span class="title-letter">O</span>
                        <span class="title-letter">N</span>
                    </h1>
                    
                    <div class="typing-container">
                        <p class="typing-text" id="typing-text"></p>
                        <div class="cursor"></div>
                    </div>
                    
                    <div class="progress-container" data-aos="fade-up" data-aos-delay="400">
                        <div class="progress-label">Development Progress</div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                    
                    <div class="countdown-container" data-aos="fade-up" data-aos-delay="600">
                        <div class="countdown-item">
                            <div class="countdown-value" id="countdown-days">00</div>
                            <div class="countdown-label">Days</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-value" id="countdown-hours">00</div>
                            <div class="countdown-label">Hours</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-value" id="countdown-minutes">00</div>
                            <div class="countdown-label">Minutes</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-value" id="countdown-seconds">00</div>
                            <div class="countdown-label">Seconds</div>
                        </div>
                    </div>
                    
                    {{-- <div class="notification-form" data-aos="fade-up" data-aos-delay="800">
                        <h3 class="form-title">Get Notified When We Launch</h3>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your Email Address" aria-label="Email Address">
                            <button class="btn notify-btn" type="button" id="notify-btn">Notify Me</button>
                        </div>
                        <div class="form-message" id="form-message"></div>
                    </div> --}}
                    
<div class="social-links-container" data-aos="fade-up" data-aos-delay="1000">
    <p>Follow our progress on social media:</p>
    <div class="social-links">
        <a href="https://www.instagram.com/himti_ua/" class="social-link">
            <i class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </i>
            <span>Instagram</span>
        </a>
        <a href="https://www.tiktok.com/@himti_ua" class="social-link">
            <i class="social-icon">
                {{-- ICON DIPERBAIKI: Tidak terpotong dan gaya lebih serasi --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="8" cy="18" r="3"></circle>
                  <path d="M11 18V7"></path>
                  <path d="M11 7c0-2.5 2-2.5 4-1s2 3 0 4-4 1-4-2"></path>
                </svg>
            </i>
            <span>Tiktok</span>
        </a>
        <a href="https://www.youtube.com/@himtiunair" class="social-link">
            <i class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2A29 29 0 0 0 23 11.75a29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
            </i>
            <span>YouTube</span>
        </a>
    </div>
</div>
                    
                    <div class="back-link" data-aos="fade-up" data-aos-delay="1200">
                        <a href="{{ url('/about') }}" class="btn back-btn">
                            <span class="back-icon">←</span>
                            <span>Back to Homepage</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@section('extra-js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Typing effect
        const textElement = document.getElementById('typing-text');
        const texts = [
            "We're working hard to bring you something amazing.",
            "Our team is crafting a new experience for you.",
            "This page is under construction, but worth the wait.",
            "New features and content coming to HIMTI soon!"
        ];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingDelay = 100;
        let deletingDelay = 50;
        let newTextDelay = 2000;

        function typeText() {
            const currentText = texts[textIndex];
            
            if (isDeleting) {
                textElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                textElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }
            
            if (!isDeleting && charIndex === currentText.length) {
                isDeleting = true;
                setTimeout(typeText, newTextDelay);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
                setTimeout(typeText, 500);
            } else {
                setTimeout(typeText, isDeleting ? deletingDelay : typingDelay);
            }
        }
        
        setTimeout(typeText, 1000);
        
        // Countdown timer
        const countdownDate = new Date();
        countdownDate.setDate(countdownDate.getDate() + 30); // 30 days from now
        
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = countdownDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById("countdown-days").textContent = days.toString().padStart(2, '0');
            document.getElementById("countdown-hours").textContent = hours.toString().padStart(2, '0');
            document.getElementById("countdown-minutes").textContent = minutes.toString().padStart(2, '0');
            document.getElementById("countdown-seconds").textContent = seconds.toString().padStart(2, '0');
            
            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown-days").textContent = "00";
                document.getElementById("countdown-hours").textContent = "00";
                document.getElementById("countdown-minutes").textContent = "00";
                document.getElementById("countdown-seconds").textContent = "00";
            }
        }
        
        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);
        
        // Notification form
        
        
        // Animate title letters
        const titleLetters = document.querySelectorAll('.title-letter');
        titleLetters.forEach((letter, index) => {
            setTimeout(() => {
                letter.classList.add('animate');
            }, 100 * index);
        });
        
        // Interactive gear animation
        document.addEventListener('mousemove', function(e) {
            const gears = document.querySelectorAll('.gear');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            gears.forEach((gear, index) => {
                const speed = 0.05 * (index + 1);
                const rotationDirection = index % 2 === 0 ? 1 : -1;
                const rotation = (mouseX * 30 * rotationDirection) + (mouseY * 30 * rotationDirection);
                gear.style.transform = `rotate(${rotation}deg)`;
            });
        });
    });
</script>
@endsection