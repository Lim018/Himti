@extends('layouts.app')

@section('title', 'HIMTI STORE - Teknik Informatika')


@section('content')
    <section
        class="relative min-h-screen md:min-h-[500px] flex items-center justify-center bg-cover bg-center overflow-x-hidden"
        style="background-image: url('{{ asset('assets/bg-marketplace.png') }}');">
        <div class="relative z-10 text-center text-white px-4">

            <!-- Desktop image -->
            <div class="hidden md:block">
                <img src="{{ asset('assets/asset_marketplace.png') }}" alt="HIMTI Store Desktop" class="mx-auto rounded-lg">
            </div>

            <!-- Mobile text -->
            <div class="block md:hidden">
                <h1 class="text-[6rem] font-black -translate-x-18">
                    HIMTI
                </h1>
                <h2 class="text-5xl font-bold tracking-[0.2em] translate-x-8">
                    STORE
                </h2>
            </div>

        </div>
    </section>

    <div class="container mx-auto flex flex-col items-center">

        <h1 class="text-5xl font-bold text-blue-800 text-center mb-2 w-full pt-24">BUNDLE</h1>
        @php
            $bundleProducts = $products->whereBetween('id', [1, 13]);
        @endphp
        @if ($bundleProducts->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 w-full pb-20 mt-10">
                @foreach ($bundleProducts as $product)
                    <a href="{{ route('marketplace.show', $product) }}" class="block group">
                        <div
                            class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-md transition-transform transform hover:-translate-y-2 hover:scale-105 duration-300">
                            <div class="relative">
                                <img src="{{ $product->featured_image ? asset('storage/' . $product->featured_image) : '/placeholder.svg?height=200&width=300' }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-56 object-cover group-hover:brightness-90 transition duration-300">
                            </div>
                            <div class="p-5 text-start">
                                <h2 class="text-lg font-bold mb-1 group-hover:text-blue-700 transition">{{ $product->name }}</h2>
                                <p class="text-blue-800 font-semibold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

        <h1 class="text-5xl font-bold text-blue-800 text-center mb-2 w-full pt-24">CATALOG</h1>
        @php
            $catalogProducts = $products->where('id', '>=', 14);
        @endphp
        @if ($catalogProducts->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 w-full pb-20 mt-10">
                @foreach ($catalogProducts as $product)
                    <a href="{{ route('marketplace.show', $product) }}" class="block group">
                        <div
                            class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-md transition-transform transform hover:-translate-y-2 hover:scale-105 duration-300">
                            <div class="relative">
                                <img src="{{ $product->featured_image ? asset('storage/' . $product->featured_image) : '/placeholder.svg?height=200&width=300' }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-56 object-cover group-hover:brightness-90 transition duration-300">
                            </div>
                            <div class="p-5 text-start">
                                <h2 class="text-lg font-bold mb-1 group-hover:text-blue-700 transition">{{ $product->name }}</h2>
                                <p class="text-blue-800 font-semibold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

    </div>

@endsection
