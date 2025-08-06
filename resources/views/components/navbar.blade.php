{{-- File: resources/views/components/navbar.blade.php --}}

<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar-kustom">
    <a href="/">
        <div class="logo-container">
            <img src="/assets/logo_himpunan.png" alt="logo_himpunan">
            <img src="/assets/logo_kabinet.png" alt="logo_kabinet">
            <div class="brand-text">
                <h3>HIMA<br><b>TEKNIK INFORMATIKA</b></h3>
            </div>
        </div>
    </a>

    <input type="checkbox" id="mobile-menu-checkbox">
    <label for="mobile-menu-checkbox" class="hamburger">☰</label>

    <div class="menu-container">
        {{-- KELAS 'border' DIHAPUS DARI SINI --}}
        <a href="/news" class="menu">News</a>
        <a href="/about" class="menu">About Us</a>
        <p class="menu sop-toggle">SOP<img class="sop-toggle-img" src="{{ asset('assets/arrow.svg') }}"></p>
        <p class="menu features-toggle">Features <img class="features-toggle-img" src="{{ asset('assets/arrow.svg') }}"></p>
    </div>
</nav>

{{-- Sub-menu tidak perlu diubah, biarkan seperti ini --}}
<div class="features sub-menu">
    <a href="" class="border-bottom">Berkas</a>
    <a href="" class="border-bottom">Marketplace</a>
    <a href="/portal">Portal</a>
</div>
<div class="SOP sub-menu">
    <a href="/sop/partnership" class="border-bottom">Partnership</a>
    <a href="/sop/medinfo">Medinfo</a>
</div>
<script src="{{ asset('js/navbar.js') }}"></script>