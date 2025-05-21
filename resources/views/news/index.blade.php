@php
   $newsList = [
      [
         'title' => 'Lorem Ipsum Dolor Sit Amet',
         'author' => 'Medinfo',
         'date' => '1 Januari 2025',
         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae.</p>',
         'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
         'image' => asset('images/news/lorem1.jpg'),
      ],
      [
         'title' => 'Consectetur Adipiscing Elit',
         'author' => 'Eksekutif',
         'date' => '2 Januari 2025',
         'body' => '<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>',
         'desc' => 'Consectetur adipiscing elit, sed do eiusmod tempor.',
         'image' => asset('images/news/lorem2.jpg'),
      ],
      [
         'title' => 'Sed Do Eiusmod Tempor',
         'author' => 'Pendidikan',
         'date' => '3 Januari 2025',
         'body' => '<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
         'desc' => 'Sed do eiusmod tempor incididunt ut labore.',
         'image' => asset('images/news/lorem3.jpg'),
      ],
   ];
   $latest = [
      'title' => 'Ut Enim Ad Minim Veniam',
      'author' => 'Perhubungan',
      'date' => '4 Januari 2025',
      'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et omnis distinctio magnam facere repudiandae necessitatibus? Rerum eaque natus sint expedita doloremque repellendus! Voluptates eligendi eos natus accusamus odio in laudantium fugiat obcaecati officia consequuntur, maxime voluptatum rem explicabo eum sit, dicta est praesentium quos, atque quidem ratione dolorem? Quidem sed obcaecati qui voluptas nisi id ratione nemo maxime rerum. Enim nam reiciendis tenetur, voluptate, doloribus consequuntur eligendi laboriosam earum sit veritatis beatae. Perspiciatis, laudantium et, sed provident voluptas numquam, aperiam temporibus reprehenderit deserunt libero distinctio harum. Iste, sequi excepturi! Impedit nobis libero, ut aperiam minus, dicta blanditiis vel laudantium rem, aspernatur id modi consequuntur magni eligendi odit sequi praesentium. Sit, expedita. Officiis dolorem accusamus, natus exercitationem voluptatem dignissimos assumenda molestias eaque provident nulla ex laudantium, at tenetur! Quam corrupti sint tenetur veniam itaque placeat delectus aperiam quod adipisci perspiciatis vero sit impedit ipsa, iste quisquam inventore? Excepturi ad placeat in laborum aut blanditiis deleniti delectus? Et repudiandae, incidunt inventore qui, saepe laborum dolorum labore deserunt aspernatur ea, dignissimos ipsam. Reiciendis, repudiandae quia nostrum soluta enim quas dignissimos odio magni voluptatum quasi, incidunt cum nihil facere aliquid totam facilis ex at a dicta suscipit? Ullam in, commodi nemo excepturi architecto numquam perspiciatis quo iure et, accusamus inventore mollitia voluptate doloremque eaque sed odit deleniti dolor, vel ea magni. Consequuntur eligendi voluptate asperiores eaque deleniti labore sint incidunt accusamus voluptatum pariatur, ipsum doloremque. Quia repudiandae suscipit voluptas voluptates cum nam ipsam dolorem. Laborum eligendi numquam animi amet rerum, vitae consectetur natus magni ut sunt error ab dolorem nesciunt dicta quis dolorum accusamus cupiditate enim iste nihil reiciendis quod suscipit? Dolorum neque odit nam natus doloribus voluptatibus, illum inventore facere maiores placeat repellat nobis et qui culpa, molestiae voluptas laboriosam deleniti est modi ipsum dicta hic ratione? Commodi rem, nobis nihil incidunt, atque molestias asperiores neque quisquam exercitationem nisi inventore alias harum illum et, reiciendis aliquam delectus mollitia perferendis voluptate reprehenderit ab nam explicabo iste! Veritatis in repudiandae eligendi quo placeat atque doloribus consequatur a. Aspernatur aliquam tempore numquam dicta qui quas molestiae eligendi voluptatibus ab laudantium earum accusamus illum, unde hic eveniet. Reiciendis, dignissimos magni. Qui saepe rem repellat consequatur repudiandae repellendus molestiae id minus, suscipit incidunt numquam libero nobis! Neque temporibus maiores tempore a nobis soluta beatae animi nisi, consequatur error reiciendis quos, at fugiat hic. Modi, iste voluptas saepe, ex vitae explicabo dicta odio qui at eius inventore nostrum corrupti.</p>',
      'image' => asset('images/news/latest-lorem.jpg'),
   ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/news/index.css') }}">
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">

</head>
<body>
   @include('components.navbar')
   <section class="highlight">
      <h1>HIMTI NEWS</h1>
      <div class="highlight_news">
         <div class="highlight_image" style="background: url('{{ $latest['image'] ?? '' }}')"></div>
         <div class="highlight_content">
            <h3>
               {{ $latest['title'] ?? 'Belum ada berita saat ini.' }}
            </h3>
            <div>
               {!! \Illuminate\Support\Str::limit($latest['body'] ?? '', 250, '...') !!}
            </div>
            <p>{{ $latest['author'] ?? '' }}<br>{{ $latest['date'] ?? '' }}</p>
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
                  <div class="news-card">
                     <div class="news-image" style="background-image: url('{{ $news['image'] }}');"></div>
                     <div class="news-content">
                        <h3>{{ $news['title'] }}</h3>
                        <p class="news-desc">{{ \Illuminate\Support\Str::limit($news['desc'], 40, '...') }}</p>
                        <p>{{ $news['author'] }}<br>{{ $news['date'] }}</p>
                     </div>
                  </div>
               @empty
                  <p>Belum ada berita saat ini.</p>
               @endforelse
            </div>
        </div>
    </section>
       <section class="depart-news-section">
        <div class="header">
            <h2>DEPART NEWS</h2>
        </div>
        <div class="news-container">
            <div class="news-scroll">
               @forelse ($newsList as $news)
                  <div class="news-card">
                     <div class="news-image" style="background-image: url('{{ $news['image'] }}');"></div>
                     <div class="news-content">
                        <h3>{{ $news['title'] }}</h3>
                        <p class="news-desc">{{ \Illuminate\Support\Str::limit($news['desc'], 40, '...') }}</p>
                        <p>{{ $news['author'] }}<br>{{ $news['date'] }}</p>
                     </div>
                  </div>
               @empty
                  <p>Belum ada berita saat ini.</p>
               @endforelse
            </div>
        </div>
    </section>
       <section class="depart-news-section">
        <div class="header">
            <h2>DEPART NEWS</h2>
        </div>
        <div class="news-container">
            <div class="news-scroll">
               @forelse ($newsList as $news)
                  <div class="news-card">
                     <div class="news-image" style="background-image: url('{{ $news['image'] }}');"></div>
                     <div class="news-content">
                        <h3>{{ $news['title'] }}</h3>
                        <p class="news-desc">{{ \Illuminate\Support\Str::limit($news['desc'], 40, '...') }}</p>
                        <p>{{ $news['author'] }}<br>{{ $news['date'] }}</p>
                     </div>
                  </div>
               @empty
                  <p>Belum ada berita saat ini.</p>
               @endforelse
            </div>
        </div>
    </section>
    @include('components.footer')
</body>
</html>