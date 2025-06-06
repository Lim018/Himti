           {{-- @php
         //   URL untuk ke detail informasi = '/portal/detail/{id}'
         //   Contoh URL untuk ke detail informasi = '/portal/detail/1'
         //   Infokan ke grup jika mau diganti pakai slug

         //   Contoh Data yang Dikirim ke View
         //   Diurutkan berdasarkan tanggal dari yang terbaru ($infoList[0]) ke yang terlama ($infoList[n])
            $infoList = [
               [
                  'id' => 1,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pengumuman Seminar Nasional',
                  'content' => 'Seminar nasional HIMTI akan diadakan pada tanggal 20 Juli 2024 di Auditorium Kampus.',
                  'date' => '2024-07-01',
               ],
               [
                  'id' => 2,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pendaftaran Anggota Baru',
                  'content' => 'Pendaftaran anggota baru HIMTI telah dibuka. Segera daftarkan diri Anda melalui portal resmi.',
                  'date' => '2024-06-28',
               ],
               [
                  'id' => 3,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Workshop Web Development',
                  'content' => 'Ikuti workshop web development gratis untuk seluruh mahasiswa jurusan TI.',
                  'date' => '2024-06-25',
               ],
               [
                  'id' => 4,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Desain Grafis',
                  'content' => 'Pelatihan desain grafis akan dilaksanakan secara online pada 10 Juli 2024.',
                  'date' => '2024-06-22',
               ],
               [
                  'id' => 5,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Lomba Cipta Karya IT',
                  'content' => 'Ayo ikuti lomba cipta karya IT dengan hadiah menarik untuk pemenang.',
                  'date' => '2024-06-20',
               ],
               [
                  'id' => 6,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pengumuman Beasiswa HIMTI',
                  'content' => 'Beasiswa HIMTI untuk mahasiswa berprestasi telah dibuka, cek syarat dan ketentuannya.',
                  'date' => '2024-06-18',
               ],
               [
                  'id' => 7,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Kegiatan Bakti Sosial',
                  'content' => 'HIMTI akan mengadakan bakti sosial di Panti Asuhan Kasih Ibu pada 15 Juli 2024.',
                  'date' => '2024-06-15',
               ],
               [
                  'id' => 8,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Public Speaking',
                  'content' => 'Tingkatkan kemampuan public speaking Anda dengan pelatihan dari HIMTI.',
                  'date' => '2024-06-12',
               ],
               [
                  'id' => 9,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Seminar Kewirausahaan Digital',
                  'content' => 'Seminar kewirausahaan digital terbuka untuk seluruh mahasiswa pada 18 Juli 2024.',
                  'date' => '2024-06-10',
               ],
               [
                  'id' => 10,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan UI/UX Design',
                  'content' => 'Pelatihan UI/UX Design akan diadakan secara offline di Lab Komputer.',
                  'date' => '2024-06-08',
               ],
               [
                  'id' => 11,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Donor Darah HIMTI',
                  'content' => 'Ayo ikut serta dalam kegiatan donor darah bersama HIMTI pada 22 Juli 2024.',
                  'date' => '2024-06-05',
               ],
               [
                  'id' => 12,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Cyber Security',
                  'content' => 'Pelatihan dasar cyber security untuk mahasiswa baru akan segera dibuka.',
                  'date' => '2024-06-03',
               ],
               [
                  'id' => 13,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Lomba Poster Digital',
                  'content' => 'Lomba poster digital dengan tema teknologi terbuka untuk umum.',
                  'date' => '2024-06-01',
               ],
               [
                  'id' => 14,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Microsoft Office',
                  'content' => 'Pelatihan Microsoft Office gratis untuk anggota HIMTI.',
                  'date' => '2024-05-29',
               ],
               [
                  'id' => 15,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Webinar Cloud Computing',
                  'content' => 'Webinar cloud computing akan diadakan secara daring pada 25 Juli 2024.',
                  'date' => '2024-05-27',
               ],
               [
                  'id' => 16,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Data Science',
                  'content' => 'Pelatihan data science untuk pemula akan segera dimulai.',
                  'date' => '2024-05-25',
               ],
               [
                  'id' => 17,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Video Editing',
                  'content' => 'Pelatihan video editing menggunakan software terbaru.',
                  'date' => '2024-05-22',
               ],
               [
                  'id' => 18,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Bahasa Inggris',
                  'content' => 'Pelatihan bahasa Inggris untuk komunikasi profesional.',
                  'date' => '2024-05-20',
               ],
               [
                  'id' => 19,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Mobile App',
                  'content' => 'Pelatihan pembuatan aplikasi mobile untuk mahasiswa TI.',
                  'date' => '2024-05-18',
               ],
               [
                  'id' => 20,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Jaringan Komputer',
                  'content' => 'Pelatihan jaringan komputer dasar untuk anggota baru.',
                  'date' => '2024-05-15',
               ],
               [
                  'id' => 21,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Fotografi Digital',
                  'content' => 'Pelatihan fotografi digital untuk dokumentasi kegiatan HIMTI.',
                  'date' => '2024-05-12',
               ],
               [
                  'id' => 22,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Leadership',
                  'content' => 'Pelatihan leadership untuk pengurus HIMTI periode 2024.',
                  'date' => '2024-05-10',
               ],
               [
                  'id' => 23,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Content Writing',
                  'content' => 'Pelatihan content writing untuk pengelola media sosial HIMTI.',
                  'date' => '2024-05-08',
               ],
               [
                  'id' => 24,
                  'image' => asset('images/portal/hero_bg.svg'),
                  'title' => 'Pelatihan Digital Marketing',
                  'content' => 'Pelatihan digital marketing untuk promosi kegiatan HIMTI.',
                  'date' => '2024-05-05',
               ],
            ];
            @endphp --}}
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">
   <link rel="stylesheet" href="{{ asset('css/portal/index.css') }}">
   <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
   <style>
   </style>
</head>
<body>
   @include('components.navbar')
    <section class="hero-section">
        <div class="container">
            <div class="portal-content">
                <h1 data-aos="fade-right" data-aos-duration="1000">PORTAL<br>HIMTI</h1>
                <p data-aos="fade-right" data-aos-duration="1000">Saluran informasi resmi Himpunan Mahasiswa D4 Teknik Informatika Universitas Airlangga. Menyediakan akses mudah ke berbagai informasi penting, seperti lomba, beasiswa, workshop, dan peluang pengembangan diri untuk warga D4 Teknik Informatika Universitas Airlangga.</p>
                <div class="admin-button" data-aos="fade-right" data-aos-duration="1000">Kabinet Selaras</div>
            </div>
            
            <div class="update-section">
                <h2 data-aos="zoom-in-down" data-aos-duration="1000">HIMTI UPDATE</h2>
               <div class="update-content" data-aos="fade-left" data-aos-duration="1000">
                  @php
                     $updateCount = min(3, count($infoList));
                  @endphp
                  @for ($i = 0; $i < $updateCount; $i++)
                     <div class="update-item" style="{{ $i === 0 ? '' : 'display:none;'}}" onclick="window.location.href='{{ url('/portal/detail/' . $infoList[$i]['id']) }}'">
                        <div class="item-img" style="background: {{ $infoList[$i]['image'] }}"></div>
                        <div class="item-content">
                           <h3>{{ $infoList[$i]['title'] }}</h3>
                           <p>{{ $infoList[$i]['body'] }}</p>
                           <p class="update-date">{{ $infoList[$i]['date'] }}</>
                        </div>
                     </div>
                  @endfor
               </div>
               <div class="pagination-dots">
                  @for ($i = 0; $i < $updateCount; $i++)
                     <div class="dot{{ $i === 0 ? ' active' : '' }}" data-index="{{ $i }}"></div>
                  @endfor
               </div>
            </div>
        </div>
    </section>
    <section class="content-section">
      <h2 data-aos="zoom-out" data-aos-duration="1000">INFORMASI TERBARU</h2>
      <div class="info-container">
         @if (count($infoList) > 0)
         @foreach($infoList as $index => $info)
            <div class="info-cards info-card-item {{ $index }}" style="{{ $index >= 6 ? 'display:none;' : '' }}" onclick="window.location.href='{{ url('/portal/detail/' . $infoList[$i]['id']) }}'" data-aos="flip-down" data-aos-duration="1000">
               <div class="top" style="background: url({{ $info['image'] }}); background-size: cover; background-position: center;"></div>
               <div class="bottom">
                  <h3>{{ $info['title'] }}</h3>
                  <p>{{ \Illuminate\Support\Str::limit($info['body'], 40, '...') }}</p>
                  <p>{{ $info['date'] }}</p>
               </div>
            </div>
         @endforeach
         @else
            <p class="no-info">Tidak ada informasi saat ini.</p>
            <script>
               document.querySelector('.info-container').style.display = 'flex';
               document.querySelector('.info-container').style.justifyContents = 'center';
               document.querySelector('.info-container').style.alignItems = 'center';
            </script>
         @endif
      </div>
         @if(count($infoList) > 6)
            <button class="show-more-btn">Lihat lebih banyak</button>
         @endif      
      <div class="logo-corner"></div>
    </section>
    @include('components.footer')

   <script src="{{ asset('js/portal.js') }}"></script>
   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
</body>
</html>