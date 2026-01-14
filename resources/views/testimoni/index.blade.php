                                                                                                                    @extends('layouts.app')

@section('title', 'Testimonial - LanyardKendal')
@section('description', 'Lihat testimoni dan review dari pelanggan LanyardKendal yang puas dengan layanan kami.')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-16 bg-[#e8e4df]">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center" data-reveal>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                Apa Kata Mereka?
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Ribuan pelanggan telah mempercayakan kebutuhan lanyard mereka kepada kami. Berikut adalah cerita kepuasan mereka.
            </p>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-12 bg-white border-b border-gray-100">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" data-reveal>
            <div>
                <p class="text-3xl md:text-4xl font-medium text-gray-900">1259+</p>
                <p class="text-sm text-gray-500 mt-1">Klien Puas</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-medium text-gray-900">4.9</p>
                <p class="text-sm text-gray-500 mt-1">Rating Rata-rata</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-medium text-gray-900">98%</p>
                <p class="text-sm text-gray-500 mt-1">Repeat Order</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-medium text-gray-900">500+</p>
                <p class="text-sm text-gray-500 mt-1">Review Positif</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Grid Section -->
<section class="py-20 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">

        @php
        $testimonials = [
            [
                'rating' => 5,
                'title' => 'Perfect Experience!',
                'text' => 'Kualitas sangat memuaskan & Dari segimanapun perfect produknya, gak nyesel beli disini. Pengerjaan cepat, CS responsif, dan hasil cetak sangat tajam. Highly recommended untuk semua kebutuhan lanyard custom!',
                'name' => 'Dr. Anastasya Lukaku',
                'role' => 'Spotify Artist',
                'avatar' => 'avatar-1.jpg',
                'product' => 'Lanyard 2.5 cm',
                'product_image' => 'lanyard-2-5cm.jpg'
            ],
            [
                'rating' => 5,
                'title' => 'The Best Experience',
                'text' => 'Ini adalah pengalaman terbaik saya membeli lanyard custom. Kualitas bahan premium, warna tidak mudah pudar, dan pengiriman tepat waktu. Sudah 3x order dan tidak pernah mengecewakan!',
                'name' => 'Mr. Snekleson Lukaku',
                'role' => 'Business Owner',
                'avatar' => 'avatar-2.jpg',
                'product' => 'Lanyard 2 cm',
                'product_image' => 'lanyard-2cm.jpg'
            ],
            [
                'rating' => 5,
                'title' => 'Pelayanan Profesional!',
                'text' => 'Pelayanan sangat profesional dari awal sampai akhir. Desain dibantu dengan sangat baik, revisi unlimited, dan hasilnya melebihi ekspektasi. Pasti akan order lagi untuk event berikutnya!',
                'name' => 'Sarah Wijaya',
                'role' => 'Event Organizer',
                'avatar' => 'avatar-3.jpg',
                'product' => 'Lanyard 1.5 cm',
                'product_image' => 'lanyard-1-5cm.jpg'
            ],
            [
                'rating' => 5,
                'title' => 'Kualitas Terbaik',
                'text' => 'Sudah bandingkan dengan beberapa vendor lain, LanyardKendal tetap yang terbaik dari segi kualitas dan harga. Sample gratis sangat membantu untuk approval design sebelum produksi massal.',
                'name' => 'Budi Santoso',
                'role' => 'Purchasing Manager',
                'avatar' => 'avatar-4.jpg',
                'product' => 'ID Card Holder',
                'product_image' => 'id-card-holder.jpg'
            ],
            [
                'rating' => 5,
                'title' => 'Super Cepat!',
                'text' => 'Ordering lanyard untuk 500 karyawan dan semuanya selesai dalam 2 hari saja! Kualitas konsisten dari pertama sampai terakhir. Tim sangat kooperatif dan komunikatif selama proses produksi.',
                'name' => 'Dewi Lestari',
                'role' => 'HR Manager',
                'avatar' => 'avatar-5.jpg',
                'product' => 'Lanyard Polyester',
                'product_image' => 'lanyard-polyester.jpg'
            ],
            [
                'rating' => 5,
                'title' => 'Harga Kompetitif',
                'text' => 'Harga sangat kompetitif dengan kualitas premium. Proses pemesanan mudah melalui WhatsApp, respon cepat, dan packaging rapi. Recommended banget untuk yang butuh lanyard custom berkualitas!',
                'name' => 'Ahmad Rizki',
                'role' => 'Office Admin',
                'avatar' => 'avatar-6.jpg',
                'product' => 'Yoyo ID',
                'product_image' => 'yoyo-id.jpg'
            ],
            [
                'rating' => 5,
                'title' => 'Sangat Memuaskan!',
                'text' => 'Awalnya ragu karena ini pertama kali order online, tapi setelah lihat hasilnya langsung jatuh cinta! Warna sesuai dengan mockup, bahan lembut tapi kuat. Terima kasih LanyardKendal!',
                'name' => 'Rina Handayani',
                'role' => 'Community Leader',
                'avatar' => 'avatar-7.jpg',
                'product' => 'Lanyard Satin',
                'product_image' => 'lanyard-satin.jpg'
            ],
            [
                'rating' => 5,
                'title' => 'Langganan Tetap!',
                'text' => 'Best lanyard vendor! Sudah langganan sejak 2023 untuk kebutuhan event kantor. Tidak pernah mengecewakan, selalu on time dan kualitas konsisten. Keep up the good work!',
                'name' => 'Dimas Prasetyo',
                'role' => 'Marketing Manager',
                'avatar' => 'avatar-8.jpg',
                'product' => 'Card Holder Kulit',
                'product_image' => 'card-holder.jpg'
            ],
        ];
        @endphp

        <!-- Testimonial Grid -->
        <div class="grid md:grid-cols-2 gap-8" data-reveal>
            @foreach($testimonials as $index => $testimonial)
            <div class="group bg-[#f8f7f4] rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300 card-lift">
                <div class="flex flex-col md:flex-row">
                    <!-- Product Image -->
                    <div class="md:w-2/5 aspect-square md:aspect-auto relative overflow-hidden">
                        <img src="{{ asset('images/products/' . $testimonial['product_image']) }}"
                             alt="{{ $testimonial['product'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80'">
                        <!-- Product Badge -->
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium rounded-full">
                                {{ $testimonial['product'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between">
                        <!-- Rating Stars -->
                        <div>
                            <div class="flex items-center gap-1 mb-3">
                                @for($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 {{ $i < $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                @endfor
                            </div>

                            <!-- Title -->
                            <h3 class="font-medium text-gray-900 text-lg mb-3">{{ $testimonial['title'] }}</h3>

                            <!-- Text -->
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ $testimonial['text'] }}</p>
                        </div>

                        <!-- Author -->
                        <div class="flex items-center gap-3 pt-4 border-t border-gray-200">
                            <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden flex-shrink-0">
                                <img src="{{ asset('images/avatars/' . $testimonial['avatar']) }}"
                                     alt="{{ $testimonial['name'] }}"
                                     class="w-full h-full object-cover"
                                     onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gray-900 flex items-center justify-center text-white font-medium text-sm\'>{{ substr($testimonial['name'], 0, 1) }}</div>'">
                            </div>
                            <div>
                                <p class="font-medium text-gray-900 text-sm">{{ $testimonial['name'] }}</p>
                                <p class="text-xs text-gray-500">{{ $testimonial['role'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16" data-reveal>
            <button class="px-8 py-4 bg-gray-900 text-white font-medium hover:bg-gray-800 transition-all hover:scale-[1.02]">
                Lihat Lebih Banyak
            </button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-6">
                Ingin Jadi Bagian dari Cerita Sukses Kami?
            </h2>
            <p class="text-gray-600 mb-8 leading-relaxed">
                Bergabunglah dengan ribuan pelanggan yang telah puas dengan layanan kami. Konsultasikan kebutuhan lanyard Anda sekarang!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20pemesanan%20lanyard"
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gray-900 text-white font-medium hover:bg-gray-800 transition-all hover:scale-[1.02]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Hubungi via WhatsApp
                </a>
                <a href="{{ route('produk') }}"
                   class="inline-flex items-center justify-center px-8 py-4 border border-gray-900 text-gray-900 font-medium hover:bg-gray-900 hover:text-white transition-all">
                    Lihat Produk Kami
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
