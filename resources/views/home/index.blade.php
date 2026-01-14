@extends('layouts.app')

@section('title', 'LanyardKendal - Cetak Lanyard Custom Terpercaya')
@section('description', 'Spesialis cetak lanyard custom berkualitas. Tersedia bantuan desain dan opsi pengiriman. Dipercaya 1259+ klien.')

@push('styles')
<style>
    .panel-item {
        flex: 1;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .panel-item:hover {
        flex: 2.5;
    }
    .panel-item:hover img {
        transform: scale(1.05);
    }
    .panel-item img {
        transition: transform 0.7s ease;
    }
    .panel-item .content-card {
        transform: translateY(100%);
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .panel-item:hover .content-card {
        transform: translateY(0);
    }

    /* Blog Slider Auto Scroll Animation */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-288px * 6 - 24px * 6));
        }
    }
    .animate-scroll {
        animation: scroll 30s linear infinite;
    }
    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>
@endpush

@section('content')

<!-- Hero Section - 5 Panel Gallery Layout -->
<section class="pt-20 bg-white">
    <div class="h-[calc(100vh-80px)] flex">
        <!-- Panel 1 - Premium Quality -->
        <div class="panel-item relative overflow-hidden cursor-pointer group">
            <img src="{{ asset('images/hero/bg-1.jpg') }}"
                 alt="Premium Quality"
                 onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=800&q=80'"
                 class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors duration-500"></div>

            <!-- Content Overlay Card -->
            <div class="content-card absolute bottom-0 right-0 left-0 bg-white/60 backdrop-blur-md p-6 lg:p-8">
                <span class="inline-block px-3 py-1.5 border border-gray-300 text-[10px] font-medium tracking-[0.15em] text-gray-600 mb-4">MOOD: PREMIUM QUALITY</span>
                <h2 class="text-xl lg:text-2xl text-gray-900 mb-3 leading-tight">
                    Lanyard Berkualitas Tinggi
                </h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Bahan premium dengan hasil cetak tajam dan tahan lama. Tersedia berbagai pilihan bahan berkualitas.
                </p>
                <a href="{{ route('produk') }}"
                   class="inline-block text-xs font-medium tracking-[0.15em] text-gray-600/70 border-b border-gray-400/50 pb-1 hover:text-gray-900 hover:border-gray-900 transition-colors">
                    READ MORE
                </a>
            </div>
        </div>

        <!-- Panel 2 - Custom Design -->
        <div class="panel-item relative overflow-hidden cursor-pointer group">
            <img src="{{ asset('images/hero/bg-2.jpg') }}"
                 alt="Custom Design"
                 onerror="this.src='https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=800&q=80'"
                 class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors duration-500"></div>

            <!-- Content Overlay Card -->
            <div class="content-card absolute bottom-0 right-0 left-0 bg-white/60 backdrop-blur-md p-6 lg:p-8">
                <span class="inline-block px-3 py-1.5 border border-gray-300 text-[10px] font-medium tracking-[0.15em] text-gray-600 mb-4">MOOD: CUSTOM DESIGN</span>
                <h2 class="text-xl lg:text-2xl text-gray-900 mb-3 leading-tight">
                    Desain Sesuai Keinginan
                </h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Tim desainer kami siap membantu mewujudkan desain impian Anda dengan revisi unlimited.
                </p>
                <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20desain"
                   class="inline-block text-xs font-medium tracking-[0.15em] text-gray-600/70 border-b border-gray-400/50 pb-1 hover:text-gray-900 hover:border-gray-900 transition-colors">
                    READ MORE
                </a>
            </div>
        </div>

        <!-- Panel 3 - Fast Service -->
        <div class="panel-item relative overflow-hidden cursor-pointer group">
            <img src="{{ asset('images/hero/bg-3.jpg') }}"
                 alt="Fast Service"
                 onerror="this.src='https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&q=80'"
                 class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors duration-500"></div>

            <!-- Content Overlay Card -->
            <div class="content-card absolute bottom-0 right-0 left-0 bg-white/60 backdrop-blur-md p-6 lg:p-8">
                <span class="inline-block px-3 py-1.5 border border-gray-300 text-[10px] font-medium tracking-[0.15em] text-gray-600 mb-4">MOOD: FAST SERVICE</span>
                <h2 class="text-xl lg:text-2xl text-gray-900 mb-3 leading-tight">
                    Same-Day Delivery
                </h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Proses produksi cepat 1 hari kerja tanpa mengorbankan kualitas. Pengiriman tepat waktu.
                </p>
                <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20butuh%20lanyard%20segera"
                   class="inline-block text-xs font-medium tracking-[0.15em] text-gray-600/70 border-b border-gray-400/50 pb-1 hover:text-gray-900 hover:border-gray-900 transition-colors">
                    READ MORE
                </a>
            </div>
        </div>

        <!-- Panel 4 - Best Price -->
        <div class="panel-item relative overflow-hidden cursor-pointer group">
            <img src="{{ asset('images/hero/bg-4.jpg') }}"
                 alt="Best Price"
                 onerror="this.src='https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80'"
                 class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors duration-500"></div>

            <!-- Content Overlay Card -->
            <div class="content-card absolute bottom-0 right-0 left-0 bg-white/60 backdrop-blur-md p-6 lg:p-8">
                <span class="inline-block px-3 py-1.5 border border-gray-300 text-[10px] font-medium tracking-[0.15em] text-gray-600 mb-4">MOOD: BEST PRICE</span>
                <h2 class="text-xl lg:text-2xl text-gray-900 mb-3 leading-tight">
                    Harga Terjangkau
                </h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Kualitas premium dengan harga bersahabat. Dapatkan diskon untuk pemesanan jumlah banyak.
                </p>
                <a href="{{ route('produk') }}"
                   class="inline-block text-xs font-medium tracking-[0.15em] text-gray-600/70 border-b border-gray-400/50 pb-1 hover:text-gray-900 hover:border-gray-900 transition-colors">
                    READ MORE
                </a>
            </div>
        </div>

        <!-- Panel 5 - Trusted Partner -->
        <div class="panel-item relative overflow-hidden cursor-pointer group">
            <img src="{{ asset('images/hero/bg-5.jpg') }}"
                 alt="Trusted Partner"
                 onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80'"
                 class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors duration-500"></div>

            <!-- Content Overlay Card -->
            <div class="content-card absolute bottom-0 right-0 left-0 bg-white/60 backdrop-blur-md p-6 lg:p-8">
                <span class="inline-block px-3 py-1.5 border border-gray-300 text-[10px] font-medium tracking-[0.15em] text-gray-600 mb-4">MOOD: TRUSTED PARTNER</span>
                <h2 class="text-xl lg:text-2xl text-gray-900 mb-3 leading-tight">
                    1259+ Klien Puas
                </h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Dipercaya perusahaan, instansi pemerintah, dan event organizer di seluruh Indonesia.
                </p>
                <a href="{{ route('portfolio') }}"
                   class="inline-block text-xs font-medium tracking-[0.15em] text-gray-600/70 border-b border-gray-400/50 pb-1 hover:text-gray-900 hover:border-gray-900 transition-colors">
                    READ MORE
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sponsor Section - Infinite Scroll -->
<section class="py-12 bg-white border-y border-gray-100 overflow-hidden">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <p data-reveal class="text-center text-sm text-gray-500 mb-8 tracking-wider uppercase">Dipercaya oleh berbagai perusahaan & institusi</p>
    </div>

    <!-- Infinite Scroll Container -->
    <div class="relative">
        <div class="flex animate-scroll">
            <!-- First Set of Sponsors -->
            <div class="flex items-center gap-16 px-8">
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/200px-Microsoft_logo.svg.png" alt="Microsoft" class="max-h-10 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/200px-Google_2015_logo.svg.png" alt="Google" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/200px-Amazon_logo.svg.png" alt="Amazon" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/200px-Netflix_2015_logo.svg.png" alt="Netflix" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Tesla_logo.png/200px-Tesla_logo.png" alt="Tesla" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/200px-IBM_logo.svg.png" alt="IBM" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Slack_Technologies_Logo.svg/200px-Slack_Technologies_Logo.svg.png" alt="Slack" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/200px-Facebook_Logo_%282019%29.png" alt="Facebook" class="max-h-8 w-auto object-contain">
                </div>
            </div>
            <!-- Duplicate Set for Seamless Loop -->
            <div class="flex items-center gap-16 px-8">
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/200px-Microsoft_logo.svg.png" alt="Microsoft" class="max-h-10 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/200px-Google_2015_logo.svg.png" alt="Google" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/200px-Amazon_logo.svg.png" alt="Amazon" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/200px-Netflix_2015_logo.svg.png" alt="Netflix" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Tesla_logo.png/200px-Tesla_logo.png" alt="Tesla" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/200px-IBM_logo.svg.png" alt="IBM" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Slack_Technologies_Logo.svg/200px-Slack_Technologies_Logo.svg.png" alt="Slack" class="max-h-8 w-auto object-contain">
                </div>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/200px-Facebook_Logo_%282019%29.png" alt="Facebook" class="max-h-8 w-auto object-contain">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    .animate-scroll {
        animation: scroll 30s linear infinite;
    }
    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>

<!-- Solusi Lanyard Kendal Section - Mediterranean Style -->
<section class="py-20 bg-white relative" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Left Content -->
            <div class="max-w-xl">
                <p class="text-gray-500 text-sm tracking-wide mb-4">Solusi Lanyard Kendal</p>
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight mb-6">
                    Ketika Waktu<br>Sangat Berharga
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Kami Siapkan Lanyard Anda dengan Cepat & Berkualitas. Dari desain hingga produksi dan pengiriman — semua dalam layanan Same-day Service. Cepat, rapi, dan tepat waktu.
                </p>
                <a href="#produk" class="text-gray-900 text-sm font-medium hover:text-amber-600 transition-colors mb-8 inline-block">
                    Read more
                </a>
                <div class="mt-6">
                    <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20pembuatan%20lanyard"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center px-8 py-4 bg-[#e8e4df] hover:bg-[#d9d5d0] text-gray-900 font-semibold text-sm tracking-wide transition-colors">
                        HUBUNGI KAMI
                        <svg class="w-4 h-4 ml-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Benefits Grid -->
            <div>
                <h3 class="text-center text-xl tracking-[0.3em] text-gray-400 font-light mb-12">BENEFITS</h3>
                <div class="grid grid-cols-2 gap-x-12 gap-y-8">
                    <!-- Benefit 1 -->
                    <div class="text-center">
                        <div class="border-t border-gray-300 pt-4 mb-3">
                            <svg class="w-6 h-6 mx-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-sm">1 Hari Proses</p>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="text-center">
                        <div class="border-t border-gray-300 pt-4 mb-3">
                            <svg class="w-6 h-6 mx-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-sm">Ongkir Gratis</p>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="text-center">
                        <div class="border-t border-gray-300 pt-4 mb-3">
                            <svg class="w-6 h-6 mx-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-sm">1259+ Klien Puas</p>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="text-center">
                        <div class="border-t border-gray-300 pt-4 mb-3">
                            <svg class="w-6 h-6 mx-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-sm">100% Garansi</p>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="text-center">
                        <div class="border-t border-gray-300 pt-4 mb-3">
                            <svg class="w-6 h-6 mx-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-sm">99% Akurasi Warna</p>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="text-center">
                        <div class="border-t border-gray-300 pt-4 mb-3">
                            <svg class="w-6 h-6 mx-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-sm">Harga Kompetitif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Keunggulan Kami - Minimalist Slider -->
<section class="py-24 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl text-gray-900 italic">Keunggulan Kami</h2>
        </div>

        <div x-data="{ activeSlide: 0, totalSlides: 3 }" class="relative">
            <!-- Navigation Arrow Left -->
            <button x-on:click="activeSlide = (activeSlide - 1 + totalSlides) % totalSlides"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-8 z-10 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <!-- Content Container -->
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out"
                     :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">

                    <!-- Slide 1 - Cetak Cepat -->
                    <div class="min-w-full">
                        <div class="text-center">
                            <!-- Image -->
                            <div class="mb-10">
                                <img src="{{ asset('images/keunggulan/proses-cepat.jpg') }}"
                                     alt="Proses Cepat"
                                     class="w-full max-w-md mx-auto aspect-[4/3] object-cover"
                                     onerror="this.src='https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=600&q=80'">
                            </div>

                            <!-- Text Content -->
                            <p class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-3">BY LANYARDKENDAL</p>
                            <h3 class="text-3xl md:text-4xl text-gray-900 mb-6">
                                Cetak Cepat 1 Hari Jadi
                            </h3>
                            <p class="text-gray-600 leading-relaxed max-w-xl mx-auto text-sm md:text-base">
                                Produksi kami menggunakan teknologi modern dengan proses hot-fit yang efisien. Pesanan Anda bisa selesai dalam 1 hari kerja tanpa mengorbankan kualitas. Dengan layanan Same Day Service, lanyard Anda langsung siap kirim ke seluruh Indonesia.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 - Kualitas Premium -->
                    <div class="min-w-full">
                        <div class="text-center">
                            <!-- Image -->
                            <div class="mb-10">
                                <img src="{{ asset('images/keunggulan/kualitas-premium.jpg') }}"
                                     alt="Kualitas Premium"
                                     class="w-full max-w-md mx-auto aspect-[4/3] object-cover"
                                     onerror="this.src='https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80'">
                            </div>

                            <!-- Text Content -->
                            <p class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-3">BY LANYARDKENDAL</p>
                            <h3 class="text-3xl md:text-4xl text-gray-900 mb-6">
                                Sublimasi Premium 99% Akurasi
                            </h3>
                            <p class="text-gray-600 leading-relaxed max-w-xl mx-auto text-sm md:text-base">
                                Menggunakan printer Epson Sure Colour F6270 dengan teknologi sublimasi terbaik. Hasil cetakan tajam dengan akurasi warna hingga 99%. Warna tidak mudah pudar dan tahan lama berkat proses Heat Press High-Pressure.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 3 - Pelayanan -->
                    <div class="min-w-full">
                        <div class="text-center">
                            <!-- Image -->
                            <div class="mb-10">
                                <img src="{{ asset('images/keunggulan/pelayanan.jpg') }}"
                                     alt="Pelayanan Terbaik"
                                     class="w-full max-w-md mx-auto aspect-[4/3] object-cover"
                                     onerror="this.src='https://images.unsplash.com/photo-1556745757-8d76bdb6984b?w=600&q=80'">
                            </div>

                            <!-- Text Content -->
                            <p class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-3">BY LANYARDKENDAL</p>
                            <h3 class="text-3xl md:text-4xl text-gray-900 mb-6">
                                CS Responsif & Gratis Ongkir
                            </h3>
                            <p class="text-gray-600 leading-relaxed max-w-xl mx-auto text-sm md:text-base">
                                Tim customer service kami siap membantu 24/7. Nikmati gratis ongkir ke seluruh Indonesia dengan minimal order tertentu. Garansi 100% jika produk tidak sesuai pesanan, plus sample gratis untuk Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrow Right -->
            <button x-on:click="activeSlide = (activeSlide + 1) % totalSlides"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-8 z-10 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Produk Pilihan Section -->
<section class="py-20 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <!-- Header -->
        <div class="mb-12">
            <h2 class="text-3xl md:text-4xl text-gray-900 italic">Produk Pilihan Untuk Kebutuhan Anda</h2>
        </div>

        <!-- Products Slider -->
        <div class="relative" x-data="{
            scrollContainer: null,
            scrollLeft() {
                this.scrollContainer.scrollBy({ left: -320, behavior: 'smooth' })
            },
            scrollRight() {
                this.scrollContainer.scrollBy({ left: 320, behavior: 'smooth' })
            }
        }" x-init="scrollContainer = $refs.slider">

            <!-- Arrow Left -->
            <button @click="scrollLeft()" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <!-- Arrow Right -->
            <button @click="scrollRight()" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <!-- Products Container -->
            <div x-ref="slider" class="flex gap-4 overflow-x-auto scrollbar-hide scroll-smooth pb-4" style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Product 1 -->
                <div class="group flex-shrink-0 w-[280px] card-lift" data-reveal data-reveal-delay="1">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-2-5cm.jpg') }}" alt="Lanyard 2.5 cm"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard 2.5 cm</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">29 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.7000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk.show', 'lanyard-2-5cm') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group flex-shrink-0 w-[280px] card-lift" data-reveal data-reveal-delay="2">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-2cm.jpg') }}" alt="Lanyard 2 cm"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard 2 cm</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">24 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.6000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk.show', 'lanyard-2cm') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group flex-shrink-0 w-[280px] card-lift" data-reveal data-reveal-delay="3">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-1-5cm.jpg') }}" alt="Lanyard 1.5 cm"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard 1.5 cm</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">31 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.5500<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk.show', 'lanyard-1-5cm') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group flex-shrink-0 w-[280px] card-lift" data-reveal data-reveal-delay="4">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-1cm.jpg') }}" alt="Lanyard 1 cm"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard 1 cm</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">18 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.5000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="group flex-shrink-0 w-[280px] card-lift">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/id-card-holder.jpg') }}" alt="ID Card Holder"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">ID Card Holder</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">22 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.3000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk.show', 'card-holder') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="group flex-shrink-0 w-[280px] card-lift">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/yoyo-id.jpg') }}" alt="Yoyo ID"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Yoyo ID</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">15 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.2500<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk.show', 'yoyo-id') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="group flex-shrink-0 w-[280px] card-lift">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-polyester.jpg') }}" alt="Lanyard Polyester"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard Polyester</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">27 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.8000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk.show', 'lanyard-polyester') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="group flex-shrink-0 w-[280px] card-lift">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-satin.jpg') }}" alt="Lanyard Satin"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard Satin</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">19 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.9000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk.show', 'lanyard-satin') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="group flex-shrink-0 w-[280px] card-lift">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-nylon.jpg') }}" alt="Lanyard Nylon"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard Nylon</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">25 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.8500<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="group flex-shrink-0 w-[280px] card-lift">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden img-zoom">
                        <img src="{{ asset('images/products/lanyard-tubular.jpg') }}" alt="Lanyard Tubular"
                             class="w-full h-full object-cover transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard Tubular</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">21 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.7500<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 11 -->
                <div class="group flex-shrink-0 w-[280px] card-lift">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden">
                        <img src="{{ asset('images/products/lanyard-woven.jpg') }}" alt="Lanyard Woven"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">Lanyard Woven</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">17 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 100 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.10000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>

                <!-- Product 12 -->
                <div class="group flex-shrink-0 w-[280px]">
                    <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden">
                        <img src="{{ asset('images/products/id-card-kulit.jpg') }}" alt="ID Card Holder Kulit"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&q=80'">
                    </div>
                    <div class="pt-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-gray-900 font-medium text-sm">ID Card Holder Kulit</h3>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-yellow-500">★★★★★</span>
                                <span class="text-gray-500">14 Reviews</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-xs text-gray-500">Minimum order 50 pcs</p>
                            <span class="text-sm font-medium text-gray-900">Rp.15000<span class="text-xs text-gray-400">/pcs</span></span>
                        </div>
                        <a href="{{ route('produk') }}" class="inline-block px-4 py-2 border border-gray-400 text-gray-700 text-xs hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors">
                            Lihat Produk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Keterangan Produk Section -->
<section class="py-20 bg-gray-100">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24" data-reveal>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Column - Image Collage -->
            <div class="relative">
                <!-- Image Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Top Left Image -->
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&q=80"
                             alt="Lanyard Production"
                             class="w-full h-48 object-cover rounded-2xl shadow-lg">
                    </div>
                    <!-- Top Right Image (Larger) -->
                    <div class="row-span-2">
                        <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80"
                             alt="Lanyard Quality"
                             class="w-full h-full object-cover rounded-2xl shadow-lg" style="min-height: 400px;">
                    </div>
                    <!-- Bottom Left Image -->
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&q=80"
                             alt="Lanyard Custom"
                             class="w-full h-48 object-cover rounded-2xl shadow-lg">
                    </div>
                </div>
            </div>

            <!-- Right Column - Content -->
            <div>
                <!-- Label -->
                <span class="text-sm font-bold text-blue-600 tracking-widest uppercase mb-4 block">KEUNGGULAN KAMI</span>

                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Keterangan Produk</h2>

                <!-- Description -->
                <p class="text-gray-600 leading-relaxed mb-8">
                    Kami mengutamakan kualitas dan kepuasan pelanggan. Dengan teknologi cetak sublimasi terbaik dan proses heat press high-pressure, setiap lanyard yang kami produksi memiliki kualitas premium dengan akurasi warna hingga 99%.
                </p>

                <!-- Features Label -->
                <h4 class="font-bold text-gray-900 mb-6">Keunggulan produk kami:</h4>

                <!-- Features Checklist - 2 Columns -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Print Sample Gratis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Produksi 1 Hari Jadi</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Gratis Ongkir Indonesia</span>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Garansi 100%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Sublimasi Printing 99%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Heat Press High-Pressure</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Cara Pemesanan Section -->
<section class="py-20 bg-[#e8e4df]">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <!-- Header -->
        <div class="text-center mb-16" data-reveal>
            <span class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-4 block">Cara Pemesanan</span>
            <h2 class="text-3xl md:text-4xl text-gray-900">
                Langkah Mudah Pesan<br>Lanyard Custom
            </h2>
        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-lg transition-all border border-gray-200">
                <div class="w-16 h-16 mx-auto mb-6 bg-gray-900 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-4">Hubungi CS Kami</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Silahkan hubungi CS kami untuk konsultasi via WhatsApp atau sosial media. Tim kami siap membantu dengan senang hati!
                </p>
                <a href="https://wa.me/6281316509191" class="inline-block px-6 py-3 border border-gray-900 text-gray-900 text-sm font-medium rounded-lg hover:bg-gray-900 hover:text-white transition-colors">
                    Hubungi Sekarang
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-lg transition-all border border-gray-200">
                <div class="w-16 h-16 mx-auto mb-6 bg-gray-900 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-4">Kirim Detail Pesanan</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Kirimkan desain, jenis lanyard, ukuran, jumlah qty, dan tanggal pengiriman. Semua proses transparan dan jelas!
                </p>
                <a href="{{ route('produk') }}" class="inline-block px-6 py-3 border border-gray-900 text-gray-900 text-sm font-medium rounded-lg hover:bg-gray-900 hover:text-white transition-colors">
                    Lihat Produk
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-lg transition-all border border-gray-200">
                <div class="w-16 h-16 mx-auto mb-6 bg-gray-900 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-4">Produksi & Kirim</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Proses produksi 1 hari jadi dengan same-day service. Kami verifikasi alamat lalu kirim langsung ke lokasi Anda!
                </p>
                <a href="{{ route('kontak') }}" class="inline-block px-6 py-3 border border-gray-900 text-gray-900 text-sm font-medium rounded-lg hover:bg-gray-900 hover:text-white transition-colors">
                    Lacak Pesanan
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimoni" class="py-20 bg-gradient-to-b from-slate-100 to-slate-200 relative overflow-hidden" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 relative z-10"
         x-data="{
            currentTestimonial: 2,
            testimonials: [
                {
                    name: 'Sir Didik Wenger',
                    role: 'HR Manager Tech Corp',
                    text: 'Awalnya ragu pesan 500 pcs dalam waktu 3 hari, tapi LanyardKilat benar-benar membuktikan namanya. Hasil cetak sublimasinya tajam, warna logo perusahaan kami akurat 99%, dan yang terpenting: selesai tepat waktu! Sangat direkomendasikan.',
                    product: 'Lanyard 1.5cm',
                    avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&q=80',
                    border: 'border-violet-400'
                },
                {
                    name: 'Sarah Wijaya',
                    role: 'Event Organizer',
                    text: 'Sudah 3x order lanyard untuk event kantor dan hasilnya selalu memuaskan. Pengerjaan cepat dan CS sangat responsif. Highly recommended!',
                    product: 'Lanyard 2cm',
                    avatar: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&q=80',
                    border: 'border-violet-300'
                },
                {
                    name: 'Budi Santoso',
                    role: 'Purchasing Manager',
                    text: 'Kualitas cetak sangat bagus, warna tidak mudah pudar. Harga juga sangat kompetitif dibanding vendor lain. Pasti order lagi!',
                    product: 'Lanyard 2.5cm',
                    avatar: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&q=80',
                    border: 'border-sky-400'
                },
                {
                    name: 'Dewi Lestari',
                    role: 'Office Admin',
                    text: 'Proses pemesanan mudah dan cepat. Barang sampai sebelum deadline. Sangat membantu untuk kebutuhan kantor yang urgent!',
                    product: 'Lanyard 1cm',
                    avatar: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&q=80',
                    border: 'border-teal-300'
                },
                {
                    name: 'Ahmad Rizki',
                    role: 'Business Owner',
                    text: 'Pelayanan ramah dan profesional. Sample gratis sangat membantu untuk approval design. Top service!',
                    product: 'Lanyard 2cm',
                    avatar: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&q=80',
                    border: 'border-amber-400'
                }
            ],
            getPosition(index) {
                const diff = index - this.currentTestimonial;
                const total = this.testimonials.length;
                let pos = diff;
                if (diff > total / 2) pos = diff - total;
                if (diff < -total / 2) pos = diff + total;
                return pos;
            },
            selectTestimonial(index) {
                this.currentTestimonial = index;
            }
         }">

        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900">Kata Mereka Tentang</h2>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900">Layanan Kami?</h2>
        </div>

        <!-- Avatar Carousel - Horizontal sliding -->
        <div class="relative h-48 md:h-56 lg:h-64 mb-12 overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <button x-on:click="selectTestimonial(index)"
                            class="absolute rounded-full overflow-hidden shadow-lg transition-all duration-500 ease-out cursor-pointer"
                            :class="[
                                testimonial.border,
                                currentTestimonial === index
                                    ? 'w-28 h-28 md:w-36 md:h-36 lg:w-40 lg:h-40 border-4 ring-4 ring-sky-400/50 z-30'
                                    : Math.abs(getPosition(index)) === 1
                                        ? 'w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 border-4 z-20 opacity-80 hover:opacity-100'
                                        : 'w-14 h-14 md:w-18 md:h-18 lg:w-20 lg:h-20 border-3 z-10 opacity-50 hover:opacity-70'
                            ]"
                            :style="{
                                transform: 'translateX(' + (getPosition(index) * (window.innerWidth < 768 ? 100 : window.innerWidth < 1024 ? 160 : 200)) + 'px) scale(' + (currentTestimonial === index ? 1 : Math.abs(getPosition(index)) === 1 ? 0.85 : 0.7) + ')',
                            }">
                        <img :src="testimonial.avatar" :alt="testimonial.name" class="w-full h-full object-cover">
                    </button>
                </template>
            </div>
        </div>

        <!-- Testimonial Card with Slider -->
        <div class="max-w-4xl mx-auto">
            <!-- Name & Role -->
            <div class="text-center mb-6">
                <p class="text-sky-600 font-semibold text-xl md:text-2xl" x-text="'— ' + testimonials[currentTestimonial].name"></p>
                <p class="text-base md:text-lg text-gray-500" x-text="testimonials[currentTestimonial].role"></p>
            </div>

            <!-- Testimonial Card -->
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 transition-all duration-300">
                <div class="text-center">
                    <!-- Quote Icon -->
                    <svg class="w-14 h-14 md:w-16 md:h-16 text-sky-200 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>

                    <!-- Testimonial Text -->
                    <blockquote class="text-gray-700 text-xl md:text-2xl leading-relaxed mb-6" x-text="testimonials[currentTestimonial].text"></blockquote>

                    <!-- Rating Stars -->
                    <div class="flex justify-center text-yellow-400 text-2xl md:text-3xl mb-4 gap-1">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>

                    <!-- Product Badge -->
                    <span class="inline-block px-5 py-2 bg-sky-100 text-sky-700 text-base md:text-lg font-medium rounded-full" x-text="testimonials[currentTestimonial].product"></span>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center gap-3 mt-8">
                <template x-for="(item, index) in testimonials" :key="index">
                    <button x-on:click="selectTestimonial(index)"
                            :class="currentTestimonial === index ? 'bg-sky-500 w-10' : 'bg-gray-300 w-4 hover:bg-gray-400'"
                            class="h-4 rounded-full transition-all duration-300"></button>
                </template>
            </div>
        </div>
    </div>
</section>

<!-- Blog Slider Section - Auto Animate -->
<section class="py-16 bg-gray-50">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 mb-10">
        <div class="flex items-center justify-between">
            <div>
                <span class="text-xs font-medium tracking-[0.3em] text-gray-400 mb-2 block">BLOG & ARTIKEL</span>
                <h2 class="text-3xl md:text-4xl font-light text-gray-900">Inspirasi & Tips</h2>
            </div>
            <a href="{{ route('blog') }}" class="text-sm font-medium tracking-wider text-gray-600 hover:text-gray-900 transition-colors border-b border-gray-400 pb-1">
                LIHAT SEMUA
            </a>
        </div>
    </div>

    <!-- Auto Scroll Slider -->
    <div class="relative overflow-hidden" x-data="{
        isPaused: false,
        scrollPosition: 0
    }"
    x-on:mouseenter="isPaused = true"
    x-on:mouseleave="isPaused = false">

        <div class="flex animate-scroll gap-6 pl-6"
             :style="isPaused ? 'animation-play-state: paused' : 'animation-play-state: running'">

            <!-- Blog Card 1 -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">MATERIAL</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Lanyard Tissue vs Polyester: Mana yang Lebih Baik?</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">15 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog Card 2 -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">TIPS</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Tips Memilih Lanyard untuk Event Besar</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">14 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog Card 3 -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">DESIGN</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Tren Desain Lanyard 2026 yang Wajib Anda Tahu</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">13 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog Card 4 -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">PERAWATAN</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Cara Merawat Lanyard Agar Tetap Awet</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">12 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog Card 5 -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">INSPIRASI</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Inspirasi Lanyard untuk Brand Anda</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">11 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog Card 6 -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">BISNIS</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Lanyard Custom untuk Promosi Bisnis</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">10 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Duplicate cards for seamless loop -->
            <!-- Blog Card 1 Duplicate -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">MATERIAL</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Lanyard Tissue vs Polyester: Mana yang Lebih Baik?</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">15 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog Card 2 Duplicate -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">TIPS</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Tips Memilih Lanyard untuk Event Besar</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">14 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog Card 3 Duplicate -->
            <a href="{{ route('blog') }}" class="flex-shrink-0 w-72 group cursor-pointer">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?w=400&q=80"
                             alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 right-3 px-2 py-1 bg-white/90 backdrop-blur-sm text-[10px] font-medium tracking-wider text-gray-600 rounded">DESIGN</span>
                    </div>
                    <div class="p-5">
                        <h4 class="font-light text-gray-900 mb-2 line-clamp-2">Tren Desain Lanyard 2026 yang Wajib Anda Tahu</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">13 Jan 2026</span>
                            <span class="text-xs text-gray-500 group-hover:text-gray-900 transition-colors">Read →</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Navigation Dots -->
    <div class="flex justify-center gap-2 mt-8">
        <span class="w-2 h-2 rounded-full bg-gray-300"></span>
        <span class="w-2 h-2 rounded-full bg-gray-300"></span>
        <span class="w-8 h-2 rounded-full bg-gray-900"></span>
        <span class="w-2 h-2 rounded-full bg-gray-300"></span>
        <span class="w-2 h-2 rounded-full bg-gray-300"></span>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-[#e8e4df] relative overflow-hidden" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 relative z-10">
        <div class="text-center">
            <p class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-4" data-reveal data-reveal-delay="1">🎯 MULAI SEKARANG</p>
            <h2 class="text-4xl md:text-5xl text-gray-900 mb-6 leading-tight" data-reveal data-reveal-delay="2">
                Siap Memesan<br>Lanyard Custom?
            </h2>
            <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed" data-reveal data-reveal-delay="3">
                Konsultasikan kebutuhan lanyard Anda secara gratis. Kami siap membantu dari desain hingga pengiriman!
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12" data-reveal data-reveal-delay="4">
                <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20pembuatan%20lanyard"
                   target="_blank" rel="noopener noreferrer"
                   class="btn-elegant inline-flex items-center justify-center px-8 py-4 bg-gray-900 hover:bg-gray-800 text-white font-medium text-lg transition-all hover:scale-105 hover:shadow-xl">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Chat WhatsApp Sekarang
                </a>
                <a href="{{ route('kontak') }}"
                   class="btn-elegant inline-flex items-center justify-center px-8 py-4 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white font-medium text-lg transition-all hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Halaman Kontak
                </a>
            </div>

            <!-- Trust Badges -->
            <div class="flex flex-wrap justify-center gap-6 text-gray-600 text-sm">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Respon Cepat
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Konsultasi Gratis
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Sample Gratis
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Garansi 100%
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


