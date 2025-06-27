@extends('layouts.app')

@section('content')
{{-- Bagian Highlight Berita Teratas --}}
<section class="highlight px-4 py-8 -mt-6">
    <h1 class="text-3xl font-bold text-center mb-6">HIMTI NEWS</h1>
    @if($latestNews)
        {{-- Kartu Highlight dengan gambar di atas --}}
        <div class="highlight_news max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer" 
             data-aos="fade-up" data-aos-duration="1000" 
             onclick="window.location.href='{{ url('/news/detail/' . $latestNews->id) }}'">
            
            <div class="w-full h-64 md:h-80 bg-cover bg-center" 
                 style="background-image: url('{{ asset('uploads/' . $latestNews->image) }}');">
            </div>
            
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">
                    {{ $latestNews->title }}
                </h3>
                <div class="text-gray-600 mb-4">
                    {{ \Illuminate\Support\Str::limit($latestNews->desc, 250, '...') }}
                </div>
                <p class="text-gray-500 text-sm">{{ $latestNews->department->name }}<br>{{ \Carbon\Carbon::parse($latestNews->date)->format('d F Y') }}</p>
            </div>
        </div>
    @else
        <div class="text-center py-10">
            <h3 class="text-xl text-gray-500">Belum ada berita saat ini.</h3>
        </div>
    @endif
    
    <h3 class="sub_title text-2xl font-bold text-center mt-12 mb-6">HIGHLIGHT NEWS</h3>
</section>

{{-- Bagian Daftar Berita Departemen --}}
<section class="depart-news-section bg-gray-50 px-4 py-12">
    <div class="header text-center mb-8">
        <h2 class="text-3xl font-bold">DEPART NEWS</h2>
    </div>

    <div class="news-container max-w-7xl mx-auto">
        <div class="news-scroll grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($news_data as $news)
                {{-- Kartu Berita Individual dengan layout flex --}}
                <div class="news-card flex flex-col bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2 cursor-pointer mt-5" 
                     data-aos="fade-up" data-aos-duration="1000" 
                     onclick="window.location.href='{{ url('/news/detail/' . $news->id) }}'">
                    
                    <div class="news-image h-48 w-full bg-cover bg-center" 
                         style="background-image: url('{{ asset('uploads/' . $news->image) }}');">
                    </div>
                    
                    <div class="news-content p-5 flex flex-col flex-1">
                        {{-- Wrapper untuk konten yang tingginya bervariasi --}}
                        <div class="flex-1">
                            {{-- PERBAIKAN 1: Jarak bawah judul diubah menjadi mb-3 --}}
                            <h3 class="text-xl font-bold text-gray-800 mb-3 truncate">{{ $news->title }}</h3>
                            <p class="news-desc text-gray-600 text-sm mb-4">{{ \Illuminate\Support\Str::limit($news->desc, 50, '...') }}</p>
                        </div>
                        {{-- Info tanggal dan departemen akan selalu di bawah --}}
                        <p class="text-gray-500 text-xs mt-auto mb-1">{{ $news->department->name }}</p>
                        <p>{{ \Carbon\Carbon::parse($news->date)->format('d F Y') }}</p>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 md:col-span-2 lg:col-span-3">Belum ada berita saat ini.</p>
            @endforelse
        </div>

        <div class="mt-12">
            {{-- PERBAIKAN 2: Memanggil view pagination kustom --}}
            {{ $news_data->links('vendor.pagination.custom-pagination') }}
        </div>
    </div>
</section>
@endsection