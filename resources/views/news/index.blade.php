<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/news/index.css') }}">
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">
   <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>
<body>
   @include('components.navbar')
   <section class="highlight">
      <h1>HIMTI NEWS</h1>
      <div class="highlight_news" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='{{ url('/news.show/detail/' . $newsList[0]['id']) }}'">
         <div class="highlight_image" style="background: url('{{ $newsList[0]['image'] ?? '' }}')"></div>
         <div class="highlight_content">
            <h3>
               {{ $newsList[0]['title'] ?? 'Belum ada berita saat ini.' }}
            </h3>
            <div>
               {!! \Illuminate\Support\Str::limit($newsList[0]['body'] ?? '', 250, '...') !!}
            </div>
            <p>{{ $newsList[0]['department_name'] ?? '' }}<br>{{ $newsList[0]['date'] ?? '' }}</p>
         </div>
      </div>
      <h3 class="sub_title">HIGHLIGHT NEWS</h3>
   </section>
   <section class="depart-news-section">
        <div class="header">
            <h2>DEPART NEWS</h2>
        </div>
        <div class="news-container">
            <div class="news-scroll">
               @forelse ($newsList as $news)
                  <div class="news-card" data-aos="fade-up" data-aos-duration="1000" onclick="window.location.href='{{ url('/news.show/detail/' . $news['id']) }}'">
                     <div class="news-image" style="background-image: url('{{ $news['image'] }}');"></div>
                     <div class="news-content">
                        <h3>{{ $news['title'] }}</h3>
                        <p class="news-desc">{{ \Illuminate\Support\Str::limit($news['desc'], 40, '...') }}</p>
                        <p>{{ $news['department_name'] }}<br>{{ $news['date'] }}</p>
                     </div>
                  </div>
               @empty
                  <p>Belum ada berita saat ini.</p>
               @endforelse
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