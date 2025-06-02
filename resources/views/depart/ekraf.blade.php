@extends('layouts.app')

@section('title', 'Ekonomi Kreatif - HIMTI Teknik Informatika')

@section('content')
<div class="department-page">
    @include('components.navbar')
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right">
                        <h1 class="department-title">EKONOMI KREATIF</h1>
                        <div class="department-badge">HIMTI 2025</div>
                        <p class="department-tagline">kata kata si divisi</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-logo" data-aos="fade-left">
                        <div class="logo-circle">
                            <img src="/images/depart/selaras3d.png?height=300&width=300" alt="HIMTI Logo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Head Section -->
    <section class="department-head-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="head-photo">
                        <img src="/images/depart/ekraf.png?height=400&width=300" alt="Naurah" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="head-info">
                        <h2 class="head-title">Ketua Departemen</h2>
                        <h3 class="head-name">Naurah</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- First Program Kerja Section -->
    <section class="program-section">
        <div class="wave-top"></div>
        <div class="program-content">
            <div class="container-fluid">
                <h2 class="program-title" data-aos="fade-up">PROGRAM KERJA</h2>
                
                <div class="staggered-cards">
                    <div class="card-row top-row">
                        <div class="program-card-staggered left-partial" data-aos="fade-right" data-aos-delay="100">
                            <h3>LOREM IP</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis</p>
                        </div>
                        <div class="program-card-staggered" data-aos="fade-up" data-aos-delay="200">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                        </div>
                        <div class="program-card-staggered" data-aos="fade-left" data-aos-delay="300">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                        </div>
                        <div class="program-card-staggered right-partial" data-aos="fade-left" data-aos-delay="400">
                            <h3>LOREM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bottom"></div>
    </section>

    <!-- Sub Department Section -->
    <section class="sub-department-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Sub Departemen</h2>
            <div class="title-underline"></div>
            
            <div class="sub-dept-image" data-aos="zoom-in">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Untitled.png-PnxITcauvanZ4MJ1TypW9j8xOZL6LE.jpeg" alt="Sub Departemen Team" class="img-fluid" />
            </div>
        </div>
    </section>

    <!-- Second Program Kerja Section -->
    <section class="program-section">
        <div class="wave-top"></div>
        <div class="program-content">
            <div class="container-fluid">
                <h2 class="program-title" data-aos="fade-up">PROGRAM KERJA</h2>
                
                <div class="staggered-cards">
                    <div class="card-row bottom-row">
                        <div class="program-card-staggered left-partial" data-aos="fade-right" data-aos-delay="100">
                            <h3>LOREM IP</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis</p>
                        </div>
                        <div class="program-card-staggered" data-aos="fade-up" data-aos-delay="200">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                        </div>
                        <div class="program-card-staggered" data-aos="fade-left" data-aos-delay="300">
                            <h3>LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                        </div>
                        <div class="program-card-staggered right-partial" data-aos="fade-left" data-aos-delay="400">
                            <h3>LOREM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bottom"></div>
    </section>

    <!-- Custom Footer -->
    <footer class="custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-brand" data-aos="fade-right">
                        <div class="footer-logo">
                            <img src="/placeholder.svg?height=60&width=60" alt="HIMTI Logo" />
                        </div>
                        <div class="footer-text">
                            <h4>HIMA D4 Teknik Informatika</h4>
                            <p>KABINET SELARAS 2025</p>
                        </div>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="copyright">©2025 HIMPUNAN MAHASISWA TEKNIK INFORMATIKA</p>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer-links" data-aos="fade-up" data-aos-delay="100">
                        <h5>Feature</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Company Profile</a></li>
                            <li><a href="#">Marketplace</a></li>
                            <li><a href="#">SOP Partnership</a></li>
                            <li><a href="#">SOP Medinfo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-links" data-aos="fade-up" data-aos-delay="200">
                        <h5>Social Media</h5>
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-links" data-aos="fade-up" data-aos-delay="300">
                        <h5>Alamat</h5>
                        <ul>
                            <li><a href="#">Lorem Ipsum</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<style>
/* Department Page Styles */
.department-page {
    background-color: #ffffff;
    min-height: 100vh;
}

/* Hero Section */
.hero-section {
    padding: 120px 0 80px;
    background-color: #ffffff;
    position: relative;
}

.hero-content {
    padding-right: 2rem;
}

.department-title {
    font-size: 4rem;
    font-weight: 800;
    color: #133d87;
    line-height: 1.1;
    margin-bottom: 1rem;
}

.department-badge {
    display: inline-block;
    background-color: #608bc0;
    color: #ffffff;
    padding: 0.5rem 1.5rem;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
}

.department-tagline {
    font-family: 'Caveat', cursive;
    font-size: 1.8rem;
    color: #133d87;
    font-style: italic;
    margin: 0;
}

.hero-logo {
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo-circle {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.3;
}

.logo-circle img {
    width: 80%;
    height: 80%;
    object-fit: contain;
}

/* Department Head Section */
.department-head-section {
    padding: 80px 0;
    background-color: #ffffff;
}

.head-photo {
    max-width: 300px;
    margin: 0 auto;
}

.head-photo img {
    border-radius: 0.5rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.head-info {
    padding-left: 2rem;
}

.head-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #133d87;
    margin-bottom: 0.5rem;
}

.head-name {
    font-size: 2rem;
    font-weight: 500;
    color: #608bc0;
    margin: 0;
}

/* Program Section */
.program-section {
    position: relative;
    background: linear-gradient(135deg, #133d87 0%, #608bc0 100%);
}

.wave-top {
    height: 100px;
    background: #ffffff;
    clip-path: ellipse(70% 100% at 50% 0%);
    margin-bottom: -1px;
}

.wave-bottom {
    height: 100px;
    background: #ffffff;
    clip-path: ellipse(70% 100% at 50% 100%);
    margin-top: -1px;
}

.program-content {
    padding: 60px 0;
}

.program-title {
    font-size: 3rem;
    font-weight: 800;
    color: #ffffff;
    text-align: center;
    margin-bottom: 3rem;
}

/* Staggered Cards Layout */
.staggered-cards {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.card-row {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 2rem;
    flex-wrap: nowrap;
    padding: 0 2rem;
}

.program-card-staggered {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    flex: 0 0 280px;
    min-height: 200px;
}

.program-card-staggered.left-partial,
.program-card-staggered.right-partial {
    flex: 0 0 200px;
    opacity: 0.8;
}

.program-card-staggered.left-partial {
    transform: translateX(-50px);
}

.program-card-staggered.right-partial {
    transform: translateX(50px);
}

.program-card-staggered:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.program-card-staggered.left-partial:hover {
    transform: translateX(-50px) translateY(-5px);
}

.program-card-staggered.right-partial:hover {
    transform: translateX(50px) translateY(-5px);
}

.program-card-staggered h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: #133d87;
    margin-bottom: 1rem;
}

.program-card-staggered p {
    font-size: 0.95rem;
    color: #666666;
    line-height: 1.6;
    margin: 0;
}

/* Sub Department Section */
.sub-department-section {
    padding: 80px 0;
    background-color: #ffffff;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #133d87;
    margin-bottom: 1rem;
}

.title-underline {
    width: 100px;
    height: 3px;
    background-color: #608bc0;
    margin-bottom: 3rem;
}

.sub-dept-image {
    display: flex;
    justify-content: center;
}

.sub-dept-image img {
    max-width: 400px;
    border-radius: 1rem;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

/* Custom Footer */
.custom-footer {
    background: linear-gradient(135deg, #133d87 0%, #608bc0 100%);
    color: #ffffff;
    padding: 60px 0 30px;
}

.footer-brand {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
}

.footer-logo {
    margin-right: 1rem;
}

.footer-logo img {
    width: 60px;
    height: 60px;
}

.footer-text h4 {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.footer-text p {
    font-size: 1rem;
    margin: 0;
    opacity: 0.9;
}

.social-icons {
    margin-bottom: 2rem;
}

.social-icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    color: #ffffff;
    margin-right: 1rem;
    transition: background-color 0.3s ease;
}

.social-icon:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ffffff;
}

.copyright {
    font-size: 0.9rem;
    opacity: 0.8;
    margin: 0;
}

.footer-links h5 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links ul li {
    margin-bottom: 0.8rem;
}

.footer-links ul li a {
    color: #ffffff;
    text-decoration: none;
    opacity: 0.9;
    transition: opacity 0.3s ease;
}

.footer-links ul li a:hover {
    opacity: 1;
    color: #ffffff;
}

/* Responsive Design */
@media (max-width: 991.98px) {
    .department-title {
        font-size: 3rem;
    }
    
    .head-info {
        padding-left: 0;
        text-align: center;
        margin-top: 2rem;
    }
    
    .hero-content {
        text-align: center;
        padding-right: 0;
        margin-bottom: 2rem;
    }
    
    .card-row {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .program-card-staggered.left-partial,
    .program-card-staggered.right-partial {
        transform: none;
        opacity: 1;
        flex: 0 0 280px;
    }
    
    .program-card-staggered.left-partial:hover,
    .program-card-staggered.right-partial:hover {
        transform: translateY(-5px);
    }
}

@media (max-width: 767.98px) {
    .department-title {
        font-size: 2.5rem;
    }
    
    .department-tagline {
        font-size: 1.5rem;
    }
    
    .head-title {
        font-size: 2rem;
    }
    
    .head-name {
        font-size: 1.5rem;
    }
    
    .program-title {
        font-size: 2.5rem;
    }
    
    .hero-section {
        padding: 100px 0 60px;
    }
    
    .logo-circle {
        width: 200px;
        height: 200px;
    }
    
    .program-card-staggered {
        flex: 0 0 100%;
        max-width: 350px;
        margin: 0 auto 1rem;
    }
    
    .footer-brand {
        flex-direction: column;
        text-align: center;
    }
    
    .footer-logo {
        margin-right: 0;
        margin-bottom: 1rem;
    }
}

@media (max-width: 575.98px) {
    .department-title {
        font-size: 2rem;
    }
    
    .program-title {
        font-size: 2rem;
    }
    
    .program-card-staggered {
        padding: 1.5rem;
    }
    
    .card-row {
        padding: 0 1rem;
    }
}
</style>
@endsection
