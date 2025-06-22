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
                     <div class="update-item" style="{{ $i === 0 ? '' : 'display:none;'}}" onclick="window.location.href='{{ url('/portal.show/detail/' . $infoList[$i]['id']) }}'">
                        <div class="item-img" style="background: {{ $infoList[$i]['image'] }}"></div>
                        <div class="item-content">
                           <h3>{{ $infoList[$i]['title'] }}</h3>
                           <p>{{ $infoList[$i]['body'] }}</p>
                           <p class="update-date">{{ $infoList[$i]['date'] }}</p>
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
            <div class="info-cards info-card-item {{ $index }}" style="{{ $index >= 6 ? 'display:none;' : '' }}" onclick="window.location.href='{{ url('/portal.show/detail/' . $info['id']) }}'" data-aos="fade-up" data-aos-duration="1000">
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