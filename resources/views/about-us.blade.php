<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - HIMTI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand me-2" href="#">
                    <img src="{{ asset('images/about/Logo-HIMTI-kecil.png') }}" alt="Logo HIMTI" class="logo-himti">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/about/Logo-SELARAS-kecil.png') }}" alt="Logo SELARAS" class="logo-selaras">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Feature</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Debug section -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <p class="text-center">Content should appear below this line</p>
                <hr>
            </div>
        </div>
    </div>

    <!-- Header Section -->
    <section class="header-section" data-aos="fade-in" data-aos-duration="1000">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="himti-title">HIMTI <span>STRUKTUR</span></h1>
                    <div class="kadep-image-container">
                        <img src="{{ asset('images/about/KADEP-HIMTI.png') }}" alt="KADEP HIMTI" class="img-fluid kadep-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengurus Utama Section -->
    <section class="pengurus-section">
        <div class="container">
            <!-- Kahima Card -->
            <div class="row pengurus-card" data-aos="fade-right" data-aos-duration="800">
                <div class="col-md-8 pengurus-info">
                    <h2 class="position-title">KAHIMA</h2>
                    <h3 class="person-name">Muhammad Zaky</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo odio sem, in
                        pretium felis hendrerit at. Vivamus at venenatis felis ac vel diam.
                        Suspendisse potenti. Praesent et quam vitae purus viverra dignissim. Curabitur
                        sagittis magna sed nulla dignissim, quis volutpat enim blandit. Duis sed eros
                        lectus. Nullam vestibulum enim nec nisi sollicitudin, vitae rhoncus dolor
                        condimentum.
                    </p>
                </div>
                <div class="col-md-4 pengurus-image">
                    <img src="{{ asset('images/about/Kahima.png') }}" alt="Kahima" class="img-fluid">
                </div>
            </div>

            <!-- Wakahima Card -->
            <div class="row pengurus-card wakahima-card" data-aos="fade-left" data-aos-duration="800">
                <div class="col-md-4 pengurus-image order-md-1 order-2">
                    <img src="{{ asset('images/about/Wakahima.png') }}" alt="Wakahima" class="img-fluid">
                </div>
                <div class="col-md-8 pengurus-info order-md-2 order-1">
                    <h2 class="position-title">WAKAHIMA</h2>
                    <h3 class="person-name">Fitria Indah</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo odio sem, in
                        pretium felis hendrerit at. Vivamus at venenatis felis ac vel diam.
                        Suspendisse potenti. Praesent et quam vitae purus viverra dignissim. Curabitur
                        sagittis magna sed nulla dignissim, quis volutpat enim blandit. Duis sed eros
                        lectus. Nullam vestibulum enim nec nisi sollicitudin, vitae rhoncus dolor
                        condimentum.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Divisi Section -->
    <section class="divisi-section">
        <div class="container">
            <div class="row">
                <!-- Ekonomi Kreatif -->
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <div class="divisi-card">
                        <div class="divisi-content">
                            <span class="year">HMTI 2025</span>
                            <h3 class="divisi-name">EKONOMI KREATIF</h3>
                        </div>
                        <div class="divisi-image">
                            <img src="{{ asset('images/about/anggota.png') }}" alt="Anggota Ekonomi Kreatif" class="img-fluid">
                            <span class="arrow-icon">&gt;</span>
                        </div>
                    </div>
                </div>

                <!-- Media Informasi & Digitalisasi -->
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                    <div class="divisi-card">
                        <div class="divisi-content">
                            <span class="year">HMTI 2025</span>
                            <h3 class="divisi-name">MEDIA INFORMASI & DIGITALISASI</h3>
                        </div>
                        <div class="divisi-image">
                            <img src="{{ asset('images/about/anggota.png') }}" alt="Anggota Media Informasi" class="img-fluid">
                            <span class="arrow-icon">&gt;</span>
                        </div>
                    </div>
                </div>

                <!-- Pendidikan -->
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="divisi-card">
                        <div class="divisi-content">
                            <span class="year">HMTI 2025</span>
                            <h3 class="divisi-name">PENDIDIKAN</h3>
                        </div>
                        <div class="divisi-image">
                            <img src="{{ asset('images/about/anggota.png') }}" alt="Anggota Pendidikan" class="img-fluid">
                            <span class="arrow-icon">&gt;</span>
                        </div>
                    </div>
                </div>

                <!-- Pengabdian Masyarakat -->
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400">
                    <div class="divisi-card">
                        <div class="divisi-content">
                            <span class="year">HMTI 2025</span>
                            <h3 class="divisi-name">PENGABDIAN MASYARAKAT</h3>
                        </div>
                        <div class="divisi-image">
                            <img src="{{ asset('images/about/anggota.png') }}" alt="Anggota Pengabdian Masyarakat" class="img-fluid">
                            <span class="arrow-icon">&gt;</span>
                        </div>
                    </div>
                </div>

                <!-- Perhubungan -->
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="500">
                    <div class="divisi-card">
                        <div class="divisi-content">
                            <span class="year">HMTI 2025</span>
                            <h3 class="divisi-name">PERHUBUNGAN</h3>
                        </div>
                        <div class="divisi-image">
                            <img src="{{ asset('images/about/anggota.png') }}" alt="Anggota Perhubungan" class="img-fluid">
                            <span class="arrow-icon">&gt;</span>
                        </div>
                    </div>
                </div>

                <!-- Pengembangan Sumber Daya Manusia -->
                <div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                    <div class="divisi-card">
                        <div class="divisi-content">
                            <span class="year">HMTI 2025</span>
                            <h3 class="divisi-name">PENGEMBANGAN SUMBER DAYA MANUSIA</h3>
                        </div>
                        <div class="divisi-image">
                            <img src="{{ asset('images/about/anggota.png') }}" alt="Anggota PSDM" class="img-fluid">
                            <span class="arrow-icon">&gt;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="footer-logo">
                        <img src="{{ asset('images/about/Logo-HIMTI-kecil.png') }}" alt="Logo HIMTI" class="img-fluid">
                    </div>
                    <div class="footer-info">
                        <p>HIMTI 24 Teknik Informatika</p>
                        <p>Jl. Margonda Raya No.100, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="footer-heading">Feature</h5>
                    <ul class="footer-links">
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Kegiatan</a></li>
                        <li><a href="#">Prestasi</a></li>
                        <li><a href="#">SOP Kegiatan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="footer-heading">Social Media</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i> YouTube</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="footer-heading">Alumni</h5>
                    <ul class="footer-links">
                        <li><a href="#">Daftar Alumni</a></li>
                        <li><a href="#">Testimoni</a></li>
                        <li><a href="#">Karir</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="copyright">© 2025 HIMTI. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/about-us.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>
</body>
</html>
