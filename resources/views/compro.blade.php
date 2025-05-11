<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMTI | Company Profile</title>
    <link rel="stylesheet" href="css/compro/desktop.css" media="(min-width: 1025px)">
    <link rel="stylesheet" href="css/compro/tablet.css" media="(min-width: 601px) and (max-width: 1024px)">
    <link rel="stylesheet" href="css/compro/mobile.css" media="(max-width: 1024px)">
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    @include('components.navbar')
    <section id="hero">
        <h1>HIMPUNAN MAHASISWA<br>TEKNIK INFORMATIKA D4</h1>
        <p>Kabinet Selaras</p>
        <button id="herobutton">Button</button>
        <div id="img1"></div>
        <div id="img2"></div>
        <img src="/assets/logo_kabinet_transparan.png" alt="logo_kabinet" id="logo_kabinet">
        <img src="/images/compro/compro_img3.png" id="img3" alt="img3">
    </section>
    <section id="desc">
        <h3>KABINET</h3>
        <h1>SELARAS</h1>
        <p id="motto">"Bersatu dalam Kolaborasi untuk Inovasi"</p>
        <div id="photoframe"></div>
        <div id="textbox">
            <p>Kabinet "Selaras" lahir dari keinginan untuk menciptakan harmoni antara inovasi dan kolaborasi.<br><br>Kami percaya bahwa keseimbangan antara internal dan eksternal, strategi dan eksekusi, serta perkembangan individu dan kemajuan kolektif adalah kunci untuk membangun ekosistem yang kompetitif dan adaptif.</p>
        </div>
        <img src="/images/compro/compro_img4.png" alt="kadep" id="kadep">
        <img src="/assets/logo_kabinet_transparan.png" alt="logo_kabinet" id="logo_kabinet_desc">
    </section>
    <section id="visi">
        <img src="/images/compro/compro_img5.svg" alt="ribbon" id="ribbon">
        <div id="visileft">
            <p>HIMTI</p>
            <h1>VISI</h1>
        </div>
        <div id="visiright">
            <p>HIMTI sebagai pusat pergerakan dan pengembangan mahasiswa, berkomitmen menjadi organisasi yang dikenal baik oleh masyarakat umum dan seluruh warga Fakultas Vokasi, serta membudayakan nilai-nilai integritas dan komitmen dalam berorganisasi.</p>
        </div>
    </section>
    <section id="misi">
        <div id="misileft">
            <p>HIMTI</p>
            <h1>MISI</h1>
        </div>
        <div id="misiright">
            <p>Membangun dan memperkuat budaya komunikasi dalam organisasi, dengan memastikan bahwa setiap anggota terlibat aktif, memiliki tanggung jawab, dan berkontribusi secara positif.</p>
            <p>Membangun citra positif HIMTI melalui berbagai kegiatan publik, menyebarkan dampak positif yang dihasilkan, serta memperkenalkan kontribusi organisasi kepada masyarakat umum dan seluruh komunitas akademik di Fakultas Vokasi.</p>
            <p>Melaksanakan program kerja berlandaskan profesionalitas dan berbasis kekeluargaan dalam berorganisasi dan bermasyarakat.</p>
        </div>
    </section>
    <section id="filosofi">
        <div id="flsftop">
            <p>FILOSOFI</p>
            <h1>LOGO</h1>
        </div>
        <div id="flsfbottom">
            <div id="flsfleft"></div>
            <div id="flsfright">
                <div class="flsfcards">
                    <div class="cardtop">
                        <img src="/images/compro/compro_img6.jpg" alt="shape" id="shape">
                        <h3>Shapes &amp; Compositions</h3>
                    </div>
                    <div class="cardbottom">
                        <p>Melambangkan keseimbangan dan keselarasan dalam menjalankan organisasi, di mana setiap elemen bekerja bersama menuju tujuan yang sama.</p>
                    </div>
                </div>
                <div class="flsfcards">
                    <div class="cardtop">
                        <img src="/images/compro/compro_img7.jpg" alt="shape" id="shape">
                        <h3>Colors</h3>
                    </div>
                    <div class="cardbottom">
                        <p>Merepresentasikan nilai-nilai yang diusung HIMTI 2025, seperti kebersamaan, inovasi, dan profesionalisme dalam setiap langkah yang diambil.</p>
                    </div>
                </div>
                <div class="flsfcards">
                    <div class="cardtop">
                        <img src="/images/compro/compro_img8.jpg" alt="shape" id="shape">
                        <h3>Visual Elements</h3>
                    </div>
                    <div class="cardbottom">
                        <p>Setiap garis, bentuk, dan simbol dalam logo memiliki arti mendalam yang menggambarkan semangat “Beraksi dalam Kolaborasi untuk Inovasi”, di mana HIMTI tidak hanya bergerak maju, tetapi juga menciptakan dampak nyata bagi lingkungan sekitarnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')

    <script src="js/compro.js"></script>
</body>
</html>