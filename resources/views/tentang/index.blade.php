@extends('layouts.app')

@section('title', 'Tentang Kami - LanyardKendal')
@section('description', 'Kenali lebih dekat LanyardKendal, spesialis cetak lanyard custom terpercaya dengan pengalaman melayani 1259+ klien di Indonesia.')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-b from-orange-50 via-white to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6 tracking-tight">
                    Tentang <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">LanyardKendal</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 leading-relaxed mb-6">
                    Kami berfokus pada produksi lanyard custom dengan standar finishing rapi, warna tajam, dan proses kerja yang terstruktur—untuk kebutuhan corporate, event, maupun institusi.
                </p>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                    Estimasi produksi express 1 hari tersedia (tergantung antrian dan jumlah pesanan). Tim kami akan bantu cek opsi paling cepat untuk kebutuhan Anda.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/illustrations/lanyard-2.svg') }}" 
                     alt="Ilustrasi tim produksi (placeholder)" 
                     class="rounded-2xl shadow-xl" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gradient-to-r from-orange-500 to-orange-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8 text-center text-white">
            <div>
                <div class="text-5xl font-bold mb-2">1259+</div>
                <div class="text-xl text-white/80">Klien Puas</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">5000+</div>
                <div class="text-xl text-white/80">Produk Terjual</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">1 Hari</div>
                <div class="text-xl text-white/80">Produksi Express</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">Garansi</div>
                <div class="text-xl text-white/80">Kualitas</div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-10 rounded-3xl border border-orange-100 shadow-sm">
                <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Visi Kami</h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Menjadi perusahaan percetakan lanyard terdepan di Indonesia dengan standar kualitas internasional dan pelayanan terbaik yang mampu memenuhi kebutuhan setiap klien dengan cepat dan profesional.
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-10 rounded-3xl border border-orange-100 shadow-sm">
                <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Misi Kami</h3>
                <ul class="space-y-3 text-lg text-gray-600">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-orange-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Memberikan produk berkualitas premium dengan harga terjangkau</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-orange-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Mengutamakan kepuasan pelanggan dengan pelayanan terbaik</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-orange-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Inovasi berkelanjutan dalam teknologi dan layanan</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gradient-to-br from-orange-50 to-amber-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-xl text-gray-600">Keunggulan yang membuat kami berbeda</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl border border-gray-200/70 shadow-sm hover:shadow-lg transition-shadow">
                <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Produksi Express</h3>
                <p class="text-gray-600">Estimasi 1 hari untuk pesanan tertentu. Kami bantu cek timeline terbaik sesuai jumlah dan kebutuhan Anda.</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl border border-gray-200/70 shadow-sm hover:shadow-lg transition-shadow">
                <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Kualitas Terjamin</h3>
                <p class="text-gray-600">Material pilihan dan proses printing yang konsisten untuk hasil rapi dan warna tajam.</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl border border-gray-200/70 shadow-sm hover:shadow-lg transition-shadow">
                <div class="bg-orange-500 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Tim Profesional</h3>
                <p class="text-gray-600">Tim berpengalaman yang siap bantu dari konsultasi, revisi desain, hingga QC sebelum kirim.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Tim Kami</h2>
            <p class="text-xl text-gray-600">Profesional berpengalaman siap melayani Anda</p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="relative mb-6 inline-block">
                    <div class="w-32 h-32 sm:w-40 sm:h-40 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full mx-auto flex items-center justify-center text-white text-4xl sm:text-5xl font-bold ring-1 ring-orange-200">
                        AM
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Agus Mulyadi</h3>
                <p class="text-gray-600">Founder & CEO</p>
            </div>
            
            <div class="text-center">
                <div class="relative mb-6 inline-block">
                    <div class="w-32 h-32 sm:w-40 sm:h-40 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full mx-auto flex items-center justify-center text-white text-4xl sm:text-5xl font-bold ring-1 ring-orange-200">
                        SP
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Siti Putri</h3>
                <p class="text-gray-600">Production Manager</p>
            </div>
            
            <div class="text-center">
                <div class="relative mb-6 inline-block">
                    <div class="w-32 h-32 sm:w-40 sm:h-40 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full mx-auto flex items-center justify-center text-white text-4xl sm:text-5xl font-bold ring-1 ring-orange-200">
                        BW
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Budi Wijaya</h3>
                <p class="text-gray-600">Design Lead</p>
            </div>
            
            <div class="text-center">
                <div class="relative mb-6 inline-block">
                    <div class="w-32 h-32 sm:w-40 sm:h-40 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full mx-auto flex items-center justify-center text-white text-4xl sm:text-5xl font-bold ring-1 ring-orange-200">
                        DK
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dewi Kusuma</h3>
                <p class="text-gray-600">Customer Service</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-orange-500 to-orange-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Siap Produksi Lanyard Custom?</h2>
        <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
            Konsultasikan kebutuhan Anda—kami bantu dari desain, pilihan bahan, sampai estimasi produksi.
        </p>
        <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20pembuatan%20lanyard" 
              target="_blank" rel="noopener noreferrer"
           class="inline-flex items-center justify-center px-8 py-4 bg-white text-orange-600 font-bold rounded-full hover:bg-white/95 transition-colors shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-orange-600">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
            Konsultasi via WhatsApp
        </a>
    </div>
</section>

@endsection

