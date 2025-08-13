@extends('layouts.app')

@section('title', 'HIMTI STORE - Teknik Informatika')


@section('content')
    <style>
        .body {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>

    <section class="bg-white min-h-screen flex items-center py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <article class="bg-white shadow-xl rounded-lg overflow-hidden flex flex-col md:flex-row">

                <div class="md:w-1/2">
                    <img src="{{ $product->featured_image ? asset('storage/' . $product->featured_image) : '/placeholder.svg?height=500&width=500' }}" 
                         alt="{{ $product->name }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="md:w-1/2 p-8 lg:p-12 flex flex-col justify-between">
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>
                        <h2 class="text-3xl font-bold text-blue-800 mb-6">Rp {{ number_format($product->price, 0, ',', '.') }}</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            {{ $product->description }}
                        </p>
                    </div>
                    <a href="{{ $product->link }}"
                        class="block w-full md:w-auto px-8 py-3 bg-blue-800 text-white font-semibold rounded-lg shadow-md text-center hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Beli Sekarang
                    </a>
                </div>
            </article>
        </div>
    </section>

    @if($relatedProducts->count() > 0)
    <section class="bg-gray-50 mt-24">

        <!-- title -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Produk Rekomendasi</h2>
            <p class="text-gray-600 mt-2">Pilihan terbaik untuk Anda</p>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 mb-24">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($relatedProducts as $related)
                <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ $related->featured_image ? asset('storage/' . $related->featured_image) : '/placeholder.svg?height=200&width=300' }}" 
                         alt="{{ $related->name }}" class="w-full object-cover h-48">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">{{ $related->name }}</h3>
                        <div class="body">
                            <div class="text-gray-800 leading-relaxed">
                                {!! nl2br(e($related->description)) !!}
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('marketplace.show', $related) }}"
                                class="block w-full md:w-auto px-8 py-2 bg-blue-800 text-white font-semibold rounded-lg shadow-md text-center hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    @endif





@endsection