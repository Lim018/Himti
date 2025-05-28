<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>DOcument</title>
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">
   <link rel="stylesheet" href="{{ asset('css/compro.css') }}">
   <style>
        #filosofi {
    width: 100vw;
    min-height: 100svh;
    height: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    font-family: "Inter", sans-serif;
    flex-direction: column;
    padding-bottom: 15vh;
}

#flsftop {
    width: fit-content;
    height: fit-content;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

#flsftop h1 {
    font-size: 4em;
    font-weight: 800;
    color: #133d87;
    text-shadow: 2px 0px 4px rgba(0, 0, 0, 0.3);
}

#flsftop p {
    font-size: 0.7em;
    color: #608bc0;
    letter-spacing: 0.4em;
    font-weight: 600;
    text-shadow: 2px 0px 4px rgba(0, 0, 0, 0.3);
    padding-right: 43vw;
    border-bottom: 9px solid #608bc0;
    margin-bottom: 30px;
    padding-bottom: 20px;
    margin-right: 1.5vw;
}

#flsfbottom {
    width: 82vw;
    min-height: 80vh;
    height: fit-content;
    display: grid;
    grid-template-columns: 5fr 6fr;
    padding-top: 1em;
}

#flsfleft {
    height: 100%;
    width: 100%;
    background-image: url(/assets/logo_kabinet.png);
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

#flsfright {
    height: fit-content;
}

.flsfcards {
    width: 100%;
    height: fit-content;
    display: flex;
    flex-direction: column;
    font-family: "Work Sans", sans-serif;
    border-radius: 15px;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.2);
    margin-bottom: 1em;
}

.cardtop {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: fit-content;
    align-items: center;
    padding: 15px;
}

.cardtop img {
    width: 5vw;
    height: 5vw;
    border-radius: 5px;
}

.cardtop h3 {
    font-size: 1.2em;
    font-weight: 800;
    color: #285397;
    margin-left: 0.7em;
}

.cardbottom {
    font-size: 0.7em;
    letter-spacing: -1px;
    font-weight: 600;
    color: #58719c;
    padding: 0px 15px 15px 15px;
    height: 7.5vw;
}

@media (max-width: 770px) {
    #filosofi {
    width: 100vw;
    min-height: 100vh;
    height: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    padding: 0 8vw 0 8vw;
    font-size: 18px;
    position: relative;
    flex-direction: column;
}

#flsftop {
    width: fit-content;
    height: fit-content;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

#flsftop h1 {
    display: block;
    font-size: 2em;
    font-weight: 800;
    color: #133d87;
    text-shadow: 2px 0px 4px rgba(0, 0, 0, 0.3);
}

#flsftop p {
    display: block;
    font-size: 0.5em;
    color: #608bc0;
    letter-spacing: 0.4em;
    font-weight: 600;
    text-shadow: 2px 0px 4px rgba(0, 0, 0, 0.3);
    padding-right: 30vw;
    border-bottom: 5px solid #608bc0;
    margin-bottom: 19px;
    padding-bottom: 8px;
    margin-right: 1.5vw;
}

#flsfbottom {
    display: block;
    width: 100vw;
    height: fit-content;
}

#flsfleft {
    display: block;
    width: 84vw;
    height: 84vw;
    margin: 0 8vw 0 8vw;
    background-image: url(/assets/logo_kabinet.png);
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

#flsfright {
    display: flex;
    flex-direction: column;
    width: 84vw;
    min-height: 10vh;
    height: fit-content;
    margin-top: 2vh;
    margin-left: 8vw;
}

.flsfcards {
    display: flex;
    width: 100%;
    min-height: 5vh;
    height: fit-content;
    flex-direction: column;
    font-family: "Work Sans", sans-serif;
    border-radius: 10px;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.2);
    margin-bottom: 1em;
}

.cardtop {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: fit-content;
    align-items: center;
    padding: 7px;
}

.cardtop img {
    display: block;
    width: 10vw;
    height: 10vw;
    border-radius: 5px;
}

.cardtop h3 {
    display: block;
    font-size: 1.2em;
    font-weight: 800;
    color: #285397;
    margin-left: 0.7em;
}

.cardbottom {
    display: block;
    font-size: 0.7em;
    letter-spacing: -1px;
    font-weight: 600;
    color: #58719c;
    padding: 7px;
    height: 25vw;
}
}
   </style>
</head>
<body>
   @include('components.navbar')
   <section class="hero">
      <div class="left">
         <div>
            <h1>HIMPUNAN MAHASISWA<br>TEKNIK INFORMATIKA D4</h1>
            <p>Kabinet Selaras</p>
            <button>Tentang Kami</button>
         </div>
      </div>
      <div class="right">
      </div>
   </section>
   <section class="desc">
      <h3>KABINET</h3>
      <h1>SELARAS</h1>
      <p class="motto">"Bersatu dalam Kolaborasi untuk Inovasi"</p>

      <div class="desc-content">
         <div class="photoframe">
            <img src="/images/compro/compro_img4.png" alt="kadep" class="kadep">
         </div>
         <div class="textbox">
            <p>
               Kabinet "Selaras" lahir dari keinginan untuk menciptakan harmoni antara inovasi dan kolaborasi.<br><br>
               Kami percaya bahwa keseimbangan antara internal dan eksternal, strategi dan eksekusi, serta perkembangan individu dan kemajuan kolektif adalah kunci untuk membangun ekosistem yang kompetitif dan adaptif.
            </p>
            <img src="/assets/logo_kabinet_transparan.png" alt="logo_kabinet" class="logo_kabinet_desc">
         </div>
      </div>
   </section>
   <section class="vision-section">
        <div class="container">
            <div class="vision-title">
                <div class="subtitle">HIMTI</div>
                <h1 class="main-title">VISI</h1>
            </div>
            <div class="vision-content">
                <p class="vision-text">
                    HIMTI sebagai pusat pergerakan dan pengembangan mahasiswa, berkomitmen menjadi organisasi yang dikenal baik oleh masyarakat umum dan seluruh warga Fakultas Vokasi, serta membudayakan nilai-nilai integritas dan komitmen dalam berorganisasi.
                </p>
            </div>
        </div>
    </section>
    <section class="mission-section">
        <div class="container">
            <div class="mission-title">
                <div class="subtitle">HIMTI</div>
                <h1 class="main-title">MISI</h1>
            </div>
            <div class="mission-content">
                <p class="mission-text">
                    Membangun dan memperkuat budaya komunikasi dalam organisasi, dengan memastikan bahwa setiap anggota terlibat aktif serta memiliki tanggung jawab, dan berkontribusi secara positif.
                </p>
                <p class="mission-text">
                    Membangun citra positif HIMTI melalui berbagai kegiatan publik, menyebarkan dampak positif yang dihasilkan, serta memperkenalkan kontribusi organisasi kepada masyarakat umum dan seluruh komunitas akademik di Fakultas Vokasi.
                </p>
                <p class="mission-text">
                    Melaksanakan program kerja berlandaskan profesionalitas dan berbasis kekeluargaan dalam berorganisasi dan bermasyarakat.
                </p>
            </div>
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
</body>
</html>