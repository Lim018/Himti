{{-- @php
$news = [
    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
    'author' => 'Medinfo',
    'date' => '25 Lorem 2025',
    'body' => '
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum itaque qui libero architecto obcaecati id repudiandae fugiat minus, odit perferendis, maiores magni quia, dicta eius ipsa eos. Distinctio minima exercitationem consequuntur quam laudantium, dolores numquam quisquam veritatis cumque? Repellendus quo molestias ea quod eum iure aliquid pariatur odio adipisci velit rem accusantium, non fuga!
          </p>
          <p>
            Et consectetur rem perspiciatis sunt possimus eius explicabo maiores ipsam quidem, deserunt molestiae mollitia accusantium nihil, officia repudiandae perferendis debitis dolore dolorum iure minus suscipit. Ipsa vero accusantium eligendi recusandae quidem odio earum porro culpa officia non praesentium error, dolorum exercitationem optio ab quas, molestiae unde, iste fugiat nesciunt provident illo dolore consequatur!
          </p>
          <p>
            Illo velit expedita a exercitationem laboriosam dicta amet iste, culpa nihil officia rem et corrupti fugiat qui! Placeat, optio odit culpa, minus tempore nesciunt natus error ipsam qui ullam voluptate omnis repellat nulla laborum quae autem animi sequi quidem eveniet repellendus quisquam in aperiam inventore doloribus. Quos provident libero eum nam, a dolorum quis aut iste, eos eligendi repudiandae, asperiores laborum nisi eveniet quidem?
          </p>
          <p>
            Debitis vero quo corrupti facilis. Impedit, voluptatum in repellat temporibus nam eos iste minus enim ipsum? Sunt velit, quam voluptatem excepturi dolorum minus! Deleniti hic nisi quae, deserunt consectetur veniam unde id? Tempora, dolore! Voluptatum excepturi libero veniam voluptates quasi autem fugit molestias. Cupiditate, blanditiis? Similique minima quidem laboriosam velit, dicta dignissimos mollitia ipsam.
          </p>
    '
];

$newsList = [
    [
        'title' => 'News Title One',
        'author' => 'Pendidikan',
        'date' => '5 September 2025',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat molestias quas alias corrupti odio maiores neque, possimus accusamus doloribus! Sunt obcaecati id ipsa quam voluptatibus a, illum at ex, repudiandae tempore molestias explicabo vero ut deserunt. Delectus, nam fugiat. Dolorem optio autem minima a, voluptatem recusandae doloremque? Dolor aliquam eaque minus doloremque voluptate exercitationem nemo impedit maiores deleniti facilis asperiores laborum suscipit totam architecto illum dignissimos saepe dolorem dolore, veniam optio non ad? Nostrum exercitationem tenetur quae ducimus sint sapiente labore, eius mollitia dolore facilis expedita repellat illo ad voluptatem. Earum aspernatur dolor temporibus quam, unde nihil. Vel, aliquam.</p>'
    ],
    [
        'title' => 'News Title Two',
        'author' => 'Pengmas',
        'date' => '10 September 2025',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat molestias quas alias corrupti odio maiores neque, possimus accusamus doloribus! Sunt obcaecati id ipsa quam voluptatibus a, illum at ex, repudiandae tempore molestias explicabo vero ut deserunt. Delectus, nam fugiat. Dolorem optio autem minima a, voluptatem recusandae doloremque? Dolor aliquam eaque minus doloremque voluptate exercitationem nemo impedit maiores deleniti facilis asperiores laborum suscipit totam architecto illum dignissimos saepe dolorem dolore, veniam optio non ad? Nostrum exercitationem tenetur quae ducimus sint sapiente labore, eius mollitia dolore facilis expedita repellat illo ad voluptatem. Earum aspernatur dolor temporibus quam, unde nihil. Vel, aliquam.</p>'
    ],
    [
        'title' => 'News Title Three',
        'author' => 'Medinfo',
        'date' => '15 September 2025',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat molestias quas alias corrupti odio maiores neque, possimus accusamus doloribus! Sunt obcaecati id ipsa quam voluptatibus a, illum at ex, repudiandae tempore molestias explicabo vero ut deserunt. Delectus, nam fugiat. Dolorem optio autem minima a, voluptatem recusandae doloremque? Dolor aliquam eaque minus doloremque voluptate exercitationem nemo impedit maiores deleniti facilis asperiores laborum suscipit totam architecto illum dignissimos saepe dolorem dolore, veniam optio non ad? Nostrum exercitationem tenetur quae ducimus sint sapiente labore, eius mollitia dolore facilis expedita repellat illo ad voluptatem. Earum aspernatur dolor temporibus quam, unde nihil. Vel, aliquam.</p>'
    ],
    [
        'title' => 'News Title Four',
        'author' => 'Perhubungan',
        'date' => '20 September 2025',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat molestias quas alias corrupti odio maiores neque, possimus accusamus doloribus! Sunt obcaecati id ipsa quam voluptatibus a, illum at ex, repudiandae tempore molestias explicabo vero ut deserunt. Delectus, nam fugiat. Dolorem optio autem minima a, voluptatem recusandae doloremque? Dolor aliquam eaque minus doloremque voluptate exercitationem nemo impedit maiores deleniti facilis asperiores laborum suscipit totam architecto illum dignissimos saepe dolorem dolore, veniam optio non ad? Nostrum exercitationem tenetur quae ducimus sint sapiente labore, eius mollitia dolore facilis expedita repellat illo ad voluptatem. Earum aspernatur dolor temporibus quam, unde nihil. Vel, aliquam.</p>'
    ],
];
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>News | HIMTI</title>
   <link rel="stylesheet" href="{{ asset('css/news/show.css') }}">
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body>
  @include('components.navbar')
<section class="hero">
      <div class="hero-content">
        <h1>{{ $news['title'] }}</h1>
        <div class="article-meta">
          <p class="author">{{ $news['department_name'] }}<br>{{ $news['date'] }}</p>
        </div>
      </div>
    </section>

    <section class="news-body">
      <div class="container">
        <article>
            {!! $news['body'] !!}
        </article>
      </div>
    </section>

    <section class='info-lainnya'>
      <div class="container">
          <h2>Informasi Lainnya</h2>
          <div class="cards-container">
            @forelse($newsList as $news)
                <div class="info-card">
                    <div class="card-image"></div>
                    <h3 class="card-title">{{ $news['title'] }}</h3>
                    <div class="meta">
                      <p>{{ $news['department_name'] }}</p>
                      <p>{{ $news['date'] }}</p>
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
