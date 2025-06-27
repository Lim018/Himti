@extends('layouts.app')

@section('content')
    <section class="hero">
      <div class="overlay"></div>
   </section>
   <section class="content">
      <div class="info" data-aos="fade-up" data-aos-duration="1000">
         <h1>{{ $info['title'] }}</h1>
         <p class="date">{{ $info['date'] }}</p>
         <div class="body">
            {!! $info['body'] !!}
         </div>
      </div>
      <div class="additional">
         <h2 data-aos="zoom-in-down" data-aos-duration="1000">INFORMASI LAINNYA</h2>
         <div class="other-info">
            @foreach ($infoList as $item)
               <div class="info-card" onclick="window.location.href='{{ url('/portal/detail/') }}'" data-aos="fade-up" data-aos-duration="1000">
                  <div class="top"></div>
                  <div class="bottom">
                     <h3>{{ $item['title'] }}</h3>
                     <p>{!! \Illuminate\Support\Str::limit(strip_tags($item['body']), 40, '...') !!}</p>
                     <p class="date">{{ $info['date'] }}</p>
                  </div>
               </div>
            @endforeach
         </div>
      </div>
   </section>
@endsection

