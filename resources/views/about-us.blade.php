@extends('layouts.app')

@section('title', 'About - HIMTI Teknik Informatika')

@section('content')
@include('components.navbar')
<div class="himti-structure">
    <!-- Background pattern elements -->
    <div class="background-pattern">
        <div class="pattern-right">
            <img src="{{ asset('images/about/background-SELARAS.png') }}" alt="Background pattern">
        </div>
    </div>

  <br><br><br><br><br>

    <main class="container main-content">
        <!-- Hero Section -->
        <section class="hero-section text-center">
            <h2 class="himti-subtitle">H I M T I</h2>
            <h1 class="struktur-title">STRUKTUR</h1>

            <div class="team-photo">
                <img src="{{ asset('images/about/KADEP-HIMTI.png') }}" alt="HIMTI Structure Team" class="img-fluid">
            </div>
        </section>

        <!-- KAHIMA Section -->
        <section class="kahima-section">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/about/Kahima.png') }}" alt="Muhammad Zaky" class="profile-image img-fluid">
                </div>
                <div class="col-md-9">
                    <h2 class="position-title">KAHIMA</h2>
                    <h3 class="person-name">Muhammad Zaky</h3>
                    <div class="profile-card">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis
                            faucibus in. Phasellus fringilla ultricies ullamcorper. Pellentesque gravida nisl nunc, id laoreet urna
                            pulvinar vel. Interdum et malesuada fames ac ante ipsum primis in faucibus. In dictum sit amet nunc vel
                            pharetra. Curabitur facilisis ex vitae blandit consectetur. Donec ut facilisis nisl, vitae pretium arcu.
                            In congue purus eleifend risus hendrerit, eu finibus lectus eleifend.
                        </p>
                        <p>
                            Nulla nec libero tortor. Fusce vehicula quam risus, nec tempus turpis luctus vel. Fusce eros diam,
                            porttitor vel ante dignissim, ullamcorper vehicula mi.
                        </p>
                        <p class="quote">kata kata dari kahima</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- WAKAHIMA Section -->
        <section class="wakahima-section">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="position-title text-end">WAKAHIMA</h2>
                    <h3 class="person-name text-end">Fitria Indah Novitasari</h3>
                    <div class="profile-card">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis
                            faucibus in. Phasellus fringilla ultricies ullamcorper. Pellentesque gravida nisl nunc, id laoreet urna
                            pulvinar vel. Interdum et malesuada fames ac ante ipsum primis in faucibus. In dictum sit amet nunc vel
                            pharetra. Curabitur facilisis ex vitae blandit consectetur. Donec ut facilisis nisl, vitae pretium arcu.
                            In congue purus eleifend risus hendrerit, eu finibus lectus eleifend.
                        </p>
                        <p>
                            Nulla nec libero tortor. Fusce vehicula quam risus, nec tempus turpis luctus vel. Fusce eros diam,
                            porttitor vel ante dignissim, ullamcorper vehicula mi.
                        </p>
                        <p class="quote">kata kata dari wakahima</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/about/Wakahima.png') }}" alt="Fitria Indah Novitasari" class="profile-image img-fluid">
                </div>
            </div>
        </section>

        <!-- Program Sections -->
        <section class="programs-section">
            <h2 class="section-title text-center mb-5">Program Kerja</h2>
            
            <!-- Ekonomi Kreatif Program -->
            <div class="program-card mb-5">
                <a href="#" class="program-link">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/about/ekraf.png') }}" alt="Ekonomi Kreatif" class="program-image">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="program-content">
                                <div class="program-year">HIMTI 2025</div>
                                <h3 class="program-title">EKONOMI KREATIF</h3>
                            </div>
                            <div class="program-arrow">
                                <i class="arrow-icon">›</i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="program-card mb-5">
                <a href="#" class="program-link">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/about/medinfo.png') }}" alt="Media Informasi & Digitalisasi" class="program-image">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="program-content">
                                <div class="program-year">HIMTI 2025</div>
                                <h3 class="program-title">MEDIA INFORMASI<br>& DIGITALISASI</h3>
                            </div>
                            <div class="program-arrow">
                                <i class="arrow-icon">›</i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="program-card mb-5">
                <a href="#" class="program-link">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/about/pendidikan.png') }}" alt="Media Informasi & Digitalisasi" class="program-image">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="program-content">
                                <div class="program-year">HIMTI 2025</div>
                                <h3 class="program-title">PENDIDIKAN</h3>
                            </div>
                            <div class="program-arrow">
                                <i class="arrow-icon">›</i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="program-card mb-5">
                <a href="#" class="program-link">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/about/pengmas.png') }}" alt="Media Informasi & Digitalisasi" class="program-image">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="program-content">
                                <div class="program-year">HIMTI 2025</div>
                                <h3 class="program-title">PENGABDIAN<br>MASYARAKAT</h3>
                            </div>
                            <div class="program-arrow">
                                <i class="arrow-icon">›</i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="program-card mb-5">
                <a href="#" class="program-link">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/about/pengmas.png') }}" alt="Media Informasi & Digitalisasi" class="program-image">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="program-content">
                                <div class="program-year">HIMTI 2025</div>
                                <h3 class="program-title">PERHUBUNGAN</h3>
                            </div>
                            <div class="program-arrow">
                                <i class="arrow-icon">›</i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="program-card mb-5">
                <a href="#" class="program-link">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/about/pengmas.png') }}" alt="Media Informasi & Digitalisasi" class="program-image">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="program-content">
                                <div class="program-year">HIMTI 2025</div>
                                <h3 class="program-title">PENGEMBANGAN<br>SUMBER DAYA<br>MAHASISWA</h3>
                            </div>
                            <div class="program-arrow">
                                <i class="arrow-icon">›</i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>
</div>
@include('components.footer')
@endsection
