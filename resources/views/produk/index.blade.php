@extends('layouts.app')

@section('title', 'Produk Lanyard Custom - LanyardKendal')
@section('description', 'Lihat koleksi produk lanyard custom berkualitas dari LanyardKendal. Tersedia berbagai ukuran dan jenis.')

@section('content')

@php
$allProducts = [
    [
        'name' => 'Lanyard 1.5 cm',
        'slug' => 'lanyard-1-5cm',
        'min_order' => '50 pcs',
        'reviews' => 29,
        'price' => 'Rp.7000',
        'image' => 'lanyard-1-5cm.jpg',
        'keywords' => ['lanyard', '1.5', '1.5cm', 'polyester', 'tali id']
    ],
    [
        'name' => 'Id Card',
        'slug' => 'id-card',
        'min_order' => '50 pcs',
        'reviews' => 18,
        'price' => 'Rp.7000',
        'image' => 'id-card.jpg',
        'keywords' => ['id card', 'kartu', 'pvc', 'name tag', 'identitas']
    ],
    [
        'name' => 'Wristband',
        'slug' => 'wristband',
        'min_order' => '100 pcs',
        'reviews' => 24,
        'price' => 'Rp.5000',
        'image' => 'wristband.jpg',
        'keywords' => ['wristband', 'gelang', 'event', 'tiket', 'bracelet']
    ],
    [
        'name' => 'Lanyard 2.0 cm',
        'slug' => 'lanyard-2cm',
        'min_order' => '50 pcs',
        'reviews' => 35,
        'price' => 'Rp.8000',
        'image' => 'lanyard-2cm.jpg',
        'keywords' => ['lanyard', '2', '2cm', 'polyester', 'tali id', 'standar']
    ],
    [
        'name' => 'Lanyard 2.5 cm',
        'slug' => 'lanyard-2-5cm',
        'min_order' => '50 pcs',
        'reviews' => 22,
        'price' => 'Rp.9000',
        'image' => 'lanyard-2-5cm.jpg',
        'keywords' => ['lanyard', '2.5', '2.5cm', 'polyester', 'tali id', 'lebar']
    ],
    [
        'name' => 'Card Holder',
        'slug' => 'card-holder',
        'min_order' => '50 pcs',
        'reviews' => 16,
        'price' => 'Rp.15000',
        'image' => 'card-holder.jpg',
        'keywords' => ['card holder', 'holder', 'kulit', 'tempat kartu', 'casing']
    ],
    [
        'name' => 'Lanyard Polyester',
        'slug' => 'lanyard-polyester',
        'min_order' => '50 pcs',
        'reviews' => 27,
        'price' => 'Rp.8000',
        'image' => 'lanyard-polyester.jpg',
        'keywords' => ['lanyard', 'polyester', 'tissue', 'ekonomis', 'murah']
    ],
    [
        'name' => 'Lanyard Satin',
        'slug' => 'lanyard-satin',
        'min_order' => '50 pcs',
        'reviews' => 19,
        'price' => 'Rp.9000',
        'image' => 'lanyard-satin.jpg',
        'keywords' => ['lanyard', 'satin', 'premium', 'halus', 'mengkilap', 'elegan']
    ],
    [
        'name' => 'Yoyo ID',
        'slug' => 'yoyo-id',
        'min_order' => '50 pcs',
        'reviews' => 15,
        'price' => 'Rp.2500',
        'image' => 'yoyo-id.jpg',
        'keywords' => ['yoyo', 'yoyo id', 'retractable', 'gantungan', 'badge reel']
    ],
];

// Filter products based on search query
$searchQuery = request('search');
$products = collect($allProducts);

if ($searchQuery) {
    $searchLower = strtolower($searchQuery);
    $products = $products->filter(function($product) use ($searchLower) {
        // Search in product name
        if (str_contains(strtolower($product['name']), $searchLower)) {
            return true;
        }
        // Search in keywords
        foreach ($product['keywords'] as $keyword) {
            if (str_contains(strtolower($keyword), $searchLower)) {
                return true;
            }
        }
        return false;
    });
}
@endphp

<!-- Hero Section -->
<section class="pt-32 pb-16 bg-[#e8e4df]">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center" data-reveal>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                Layanan Produk Kami
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Temukan berbagai pilihan lanyard custom berkualitas untuk kebutuhan bisnis, event, dan komunitas Anda.
            </p>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="py-20 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">

        <!-- Search Filter -->
        @if($searchQuery)
        <div class="mb-8 text-center" data-reveal>
            <p class="text-gray-600">
                @if($products->count() > 0)
                    Menampilkan {{ $products->count() }} hasil untuk: <span class="font-medium text-gray-900">"{{ $searchQuery }}"</span>
                @else
                    Tidak ada produk yang cocok dengan: <span class="font-medium text-gray-900">"{{ $searchQuery }}"</span>
                @endif
            </p>
            <a href="{{ route('produk') }}" class="text-gray-900 hover:underline text-sm font-medium mt-2 inline-block">
                ← Lihat semua produk
            </a>
        </div>
        @endif

        <!-- Products Grid -->
        @if($products->count() > 0)
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8" data-reveal>
            @foreach($products as $product)
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/products/' . $product['image']) }}"
                         alt="{{ $product['name'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                         onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80'">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">{{ $product['name'] }}</h3>
                            <p class="text-sm text-gray-500">Minimum order {{ $product['min_order'] }}</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>{{ $product['reviews'] }} Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">{{ $product['price'] }}<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show', $product['slug']) }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- No Results -->
        <div class="text-center py-16" data-reveal>
            <div class="mb-6">
                <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <h3 class="text-xl text-gray-900 mb-2">Produk tidak ditemukan</h3>
            <p class="text-gray-500 mb-6">Coba kata kunci lain seperti "lanyard", "id card", "wristband", atau "yoyo"</p>
            <a href="{{ route('produk') }}" class="inline-block px-6 py-3 bg-gray-900 text-white font-medium hover:bg-gray-800 transition-all">
                Lihat Semua Produk
            </a>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl sm:text-4xl text-gray-900 mb-6">
                Butuh Bantuan Memilih Produk?
            </h2>
            <p class="text-gray-600 mb-8">
                Tim kami siap membantu Anda memilih produk yang tepat sesuai kebutuhan dan budget.
            </p>
            <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20produk"
               target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white px-8 py-4 font-medium transition-all hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Chat WhatsApp Sekarang
            </a>
        </div>
    </div>
</section>

@endsection
