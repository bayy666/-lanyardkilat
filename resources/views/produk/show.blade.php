@extends('layouts.app')

@section('title', $product['name'] . ' - LanyardKendal')
@section('description', 'Detail produk ' . $product['name'] . ' dari LanyardKendal. ' . $product['description'])

@section('content')

<!-- Breadcrumb -->
<section class="pt-28 pb-4 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <nav class="flex items-center space-x-2 text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-gray-900 transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('produk') }}" class="hover:text-gray-900 transition-colors">Produk</a>
            <span>/</span>
            <span class="text-gray-900">{{ $product['name'] }}</span>
        </nav>
    </div>
</section>

<!-- Product Detail Section -->
<section class="py-8 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="grid lg:grid-cols-2 gap-12">

            <!-- Product Image Slider -->
            <div x-data="{ currentImage: 0, images: {{ json_encode($product['images']) }} }" class="space-y-4" data-reveal>
                <!-- Main Image -->
                <div class="aspect-square bg-[#f5f5f3] rounded-2xl overflow-hidden relative">
                    <template x-for="(img, index) in images" :key="index">
                        <img x-show="currentImage === index"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             :src="img"
                             :alt="'{{ $product['name'] }} - Image ' + (index + 1)"
                             class="absolute inset-0 w-full h-full object-cover"
                             onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=600&q=80'">
                    </template>

                    <!-- Navigation Arrows -->
                    <button @click="currentImage = currentImage > 0 ? currentImage - 1 : images.length - 1"
                            class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/80 hover:bg-white rounded-full flex items-center justify-center shadow-md transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button @click="currentImage = currentImage < images.length - 1 ? currentImage + 1 : 0"
                            class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/80 hover:bg-white rounded-full flex items-center justify-center shadow-md transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

                <!-- Thumbnail Images -->
                <div class="flex gap-3">
                    <template x-for="(img, index) in images" :key="index">
                        <button @click="currentImage = index"
                                :class="currentImage === index ? 'ring-2 ring-gray-900' : 'opacity-60 hover:opacity-100'"
                                class="w-20 h-20 bg-[#f5f5f3] rounded-lg overflow-hidden transition-all">
                            <img :src="img"
                                 :alt="'Thumbnail ' + (index + 1)"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=200&q=80'">
                        </button>
                    </template>
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6" data-reveal data-reveal-delay="1">
                <!-- Badge & Title -->
                <div>
                    @if($product['badge'])
                    <span class="inline-block px-3 py-1 text-xs font-medium bg-gray-900 text-white rounded-full mb-3">
                        {{ $product['badge'] }}
                    </span>
                    @endif
                    <h1 class="text-3xl lg:text-4xl text-gray-900 mb-3">{{ $product['name'] }}</h1>
                    <p class="text-gray-600 leading-relaxed">{{ $product['description'] }}</p>
                </div>

                <!-- Rating -->
                <div class="flex items-center gap-3">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                    <span class="text-gray-600">{{ $product['reviews'] }} Reviews</span>
                </div>

                <!-- Price -->
                <div class="bg-[#f8f7f4] rounded-xl p-6">
                    <div class="flex items-baseline gap-2">
                        <span class="text-3xl font-medium text-gray-900">{{ $product['price'] }}</span>
                        <span class="text-gray-500">/pcs</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">Minimum order {{ $product['min_order'] }}</p>
                </div>

                <!-- Specifications -->
                <div class="border-t border-b border-gray-100 py-6 space-y-4">
                    <h3 class="font-medium text-gray-900">Spesifikasi:</h3>
                    @foreach($product['specs'] as $label => $value)
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">{{ $label }}</span>
                        <span class="text-gray-900">{{ $value }}</span>
                    </div>
                    @endforeach
                </div>

                <!-- Features -->
                <div>
                    <h3 class="font-medium text-gray-900 mb-3">Keunggulan:</h3>
                    <ul class="space-y-2">
                        @foreach($product['features'] as $feature)
                        <li class="flex items-center gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20order%20{{ urlencode($product['name']) }}"
                       target="_blank" rel="noopener noreferrer"
                       class="flex-1 bg-gray-900 hover:bg-gray-800 text-white py-4 px-6 text-center font-medium transition-all hover:scale-[1.02]">
                        <span class="flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Order via WhatsApp
                        </span>
                    </a>
                    <a href="{{ route('produk') }}"
                       class="flex-1 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white py-4 px-6 text-center font-medium transition-all">
                        Lihat Produk Lain
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="py-20 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center mb-12">

            <h2 class="text-3xl text-gray-900">Mungkin Anda Juga Suka</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($relatedProducts as $related)
            <div class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                    <img src="{{ asset('images/products/' . $related['image']) }}"
                         alt="{{ $related['name'] }}"
                         class="w-full h-full object-cover transition-transform duration-500"
                         onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=300&q=80'">
                </div>
                <div class="pt-4">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-gray-900 font-medium text-sm">{{ $related['name'] }}</h3>
                        <div class="flex items-center gap-1 text-xs">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-gray-500">{{ $related['reviews'] }} Reviews</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-3">
                        <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                        <span class="text-sm font-medium text-gray-900">{{ $related['price'] }}<span class="text-xs text-gray-400">/pcs</span></span>
                    </div>
                    <a href="{{ route('produk.show', $related['slug']) }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                        Lihat Produk
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
