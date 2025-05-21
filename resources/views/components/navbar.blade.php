<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav>
    <div class="logo-container">
        <img src="/assets/logo_himpunan.png" alt="logo_himpunan">
        <img src="/assets/logo_kabinet.png" alt="logo_kabinet">
        <div class="brand-text">
            <h3>HIMA<br><b>TEKNIK INFORMATIKA</b></h3>
        </div>
    </div>

    <input type="checkbox" id="mobile-menu-checkbox">
    <label for="mobile-menu-checkbox" class="hamburger">☰</label>

    <div class="menu-container">
        <a href="" class="menu border">News</a>
        <a href="" class="menu border">About Us</a>
        <p class="menu border sop-toggle">SOP<img class="sop-toggle-img" src="{{ asset('assets/arrow.svg') }}"></p>
        <p class="menu features-toggle">Features <img class="features-toggle-img" src="{{ asset('assets/arrow.svg') }}"></p>
    </div>
</nav>
<div class="features sub-menu">
    <a href="" class="border-bottom">Berkas</a>
    <a href="" class="border-bottom">Marketplace</a>
    <a href="">Portal</a>
</div>
<div class="SOP sub-menu">
    <a href="" class="border-bottom">Partnership</a>
    <a href="">Medinfo</a>
</div>
<script src="js/navbar.js"></script>