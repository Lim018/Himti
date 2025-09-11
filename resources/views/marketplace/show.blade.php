@extends('layouts.app')

@section('title', 'HIMTI STORE - ' . $product->name) {{-- Dynamically set title --}}

@section('content')
    {{-- Removed the <style> block as it's not needed for this layout --}}

    <section class="bg-white min-h-screen flex items-center py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <article class="bg-white border border-zinc-200 rounded-lg overflow-hidden p-6 sm:p-8 lg:p-12">
                
                {{-- 1. Landscape Image at the top --}}
                <div class="mb-8">
                    <img src="{{ $product->featured_image ? asset('storage/' . $product->featured_image) : 'https://via.placeholder.com/1200x675.png/007bff/ffffff?text=HIMTI+STORE' }}"
                         alt="{{ $product->name }}"
                         class="w-full h-auto aspect-video object-cover rounded-lg">
                </div>

                {{-- 2. Two-column layout below the image --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">

                    {{-- Left Column: Title and Description --}}
                    <div class="md:col-span-2">
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">{{ $product->name }}</h1>
                        <div class="prose lg:prose-lg max-w-none text-gray-600 leading-relaxed">
                             {!! nl2br(e($product->description)) !!} {{-- Using nl2br to respect line breaks --}}
                        </div>
                    </div>

                    {{-- Right Column: Price, Stock, and Buy Button --}}
                    <div class="md:col-span-1">
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 flex flex-col gap-6 h-full sticky top-24">
                            <div>
                                <h2 class="text-3xl lg:text-4xl font-bold text-blue-800">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </h2>
                            </div>
                            
                            {{-- Action Button --}}
                            <div class="mt-auto"> {{-- Pushes the button to the bottom --}}
                                @if($product->stock > 0)
                                    <a href="{{ route('marketplace.purchase.form', $product) }}"
                                        class="block w-full px-6 py-3 bg-blue-800 text-white font-semibold rounded-lg text-center hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 text-lg">
                                        Beli Sekarang
                                    </a>
                                @else
                                    <button disabled
                                        class="block w-full px-6 py-3 bg-gray-400 text-white font-semibold rounded-lg shadow-md text-center cursor-not-allowed text-lg">
                                        Stok Habis
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>


@endsection