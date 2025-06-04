   @php
      // Contoh data yang dikirim ke view.
      // $info untuk informasi yang ditampilkan di bagian utama.
      // $infoList untuk daftar informasi lainnya (3 info terakhir) yang ditampilkan di bagian bawah.
      $info = [
         'id' => 1,
         'image' => asset('images/compro/compro_img2.jpg'),
         'title' => 'Welcome to Our World Changing Company',
         'date' => '2024-06-01',
         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt consectetur, nisi nisl aliquam enim, eget facilisis enim sapien eu urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
         <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer euismod, justo at dictum cursus, enim erat facilisis urna, nec dictum sem urna at sapien. Etiam ac massa sed turpis tincidunt dictum.</p>
         <p>Morbi non urna vitae elit cursus dictum. Nullam euismod, nisi vel consectetur cursus, nisl erat dictum enim, at facilisis enim sapien eu urna. Suspendisse potenti.</p>',
      ];
      $infoList = [
         [
            'id' => 2,
            'image' => asset('images/compro/compro_img2.jpg'),
            'title' => 'Our Mission',
            'date' => '2024-05-20',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt consectetur.</p>',
         ],
         [
            'id' => 3,
            'image' => asset('images/compro/compro_img2.jpg'),
            'title' => 'Our Vision',
            'date' => '2024-05-15',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus.</p>',
         ],
         [
            'id' => 4,
            'image' => asset('images/compro/compro_img2.jpg'),
            'title' => 'Our Values',
            'date' => '2024-05-10',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac massa sed turpis tincidunt dictum.</p>',
         ],
      ];
   @endphp


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">
   <link rel="stylesheet" href="{{ asset('css/portal/show.css') }}">
   <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>
   @include('components.navbar')
   <section class="hero" style="background-image: url('{{ $info['image'] }}');">
      <div class="overlay"></div>
   </section>
   <section class="content">
      <div class="info" data-aos="fade-up" data-aos-duration="1000">
         <h1>{{ $info['title'] }}</h1>
         <p class="date">{{ date('d F Y', strtotime($info['date'])) }}</p>
         <div class="body">
            {!! $info['body'] !!}
         </div>
      </div>
      <div class="additional">
         <h2 data-aos="zoom-in-down" data-aos-duration="1000">INFORMASI LAINNYA</h2>
         <div class="other-info">
            @foreach ($infoList as $item)
               <div class="info-card" onclick="window.location.href='{{ url('/portal/detail/' . $item['id']) }}'" data-aos="fade-up" data-aos-duration="1000">
                  <div class="top" style="background-image: url('{{ $item['image'] }}')"></div>
                  <div class="bottom">
                     <h3>{{ $item['title'] }}</h3>
                     <p>{!! \Illuminate\Support\Str::limit(strip_tags($item['body']), 40, '...') !!}</p>
                     <p class="date">{{ date('d F Y', strtotime($item['date'])) }}</p>
                  </div>
               </div>
            @endforeach
         </div>
      </div>
   </section>
   @include('components.footer')

   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
</body>
</html>