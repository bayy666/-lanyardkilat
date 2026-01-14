@extends('layouts.app')

@section('title', 'Portfolio - LanyardKendal')
@section('description', 'Lihat portfolio hasil karya kami. Lebih dari 1259+ klien di seluruh Indonesia telah mempercayakan kebutuhan lanyard mereka pada kami.')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-16 bg-[#e8e4df]">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center" data-reveal>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                Portfolio Karya Kami
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Contoh hasil produksi lanyard custom untuk berbagai kebutuhan—corporate, event, hingga institusi pendidikan.
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
                <p class="text-3xl md:text-4xl font-medium text-gray-900">500+</p>
                <p class="text-sm text-gray-500 mt-1">Project Selesai</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-medium text-gray-900">50M+</p>
                <p class="text-sm text-gray-500 mt-1">Lanyard Diproduksi</p>
            </div>
            <div>
                <p class="text-3xl md:text-4xl font-medium text-gray-900">34</p>
                <p class="text-sm text-gray-500 mt-1">Provinsi Terjangkau</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-20 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24" x-data="{ active: 'all' }">

        <!-- Filter Tabs -->
        <div class="flex justify-center mb-12" data-reveal>
            <div class="inline-flex flex-wrap items-center justify-center gap-2">
                <button type="button" @click="active = 'all'" :aria-pressed="active === 'all'"
                        :class="active === 'all' ? 'bg-gray-900 text-white' : 'border border-gray-300 text-gray-700 hover:bg-gray-900 hover:text-white hover:border-gray-900'"
                        class="px-6 py-2.5 text-sm font-medium transition-all">
                    Semua
                </button>
                <button type="button" @click="active = 'corporate'" :aria-pressed="active === 'corporate'"
                        :class="active === 'corporate' ? 'bg-gray-900 text-white' : 'border border-gray-300 text-gray-700 hover:bg-gray-900 hover:text-white hover:border-gray-900'"
                        class="px-6 py-2.5 text-sm font-medium transition-all">
                    Corporate
                </button>
                <button type="button" @click="active = 'event'" :aria-pressed="active === 'event'"
                        :class="active === 'event' ? 'bg-gray-900 text-white' : 'border border-gray-300 text-gray-700 hover:bg-gray-900 hover:text-white hover:border-gray-900'"
                        class="px-6 py-2.5 text-sm font-medium transition-all">
                    Event
                </button>
                <button type="button" @click="active = 'school'" :aria-pressed="active === 'school'"
                        :class="active === 'school' ? 'bg-gray-900 text-white' : 'border border-gray-300 text-gray-700 hover:bg-gray-900 hover:text-white hover:border-gray-900'"
                        class="px-6 py-2.5 text-sm font-medium transition-all">
                    Sekolah
                </button>
            </div>
        </div>

        <!-- Portfolio Items -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" data-reveal>

            <!-- Portfolio Item 1 -->
            <div x-show="active === 'all' || active === 'corporate'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&q=80"
                         alt="Lanyard PT Telkom Indonesia"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Corporate
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">PT Telkom Indonesia</h3>
                    <p class="text-sm text-gray-500">Lanyard 2.5cm Polyester • 5.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div x-show="active === 'all' || active === 'event'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80"
                         alt="Lanyard Tech Summit 2026"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Event
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Tech Summit 2026</h3>
                    <p class="text-sm text-gray-500">Lanyard 2cm Satin • 3.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div x-show="active === 'all' || active === 'school'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600&q=80"
                         alt="Lanyard Universitas Gadjah Mada"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Sekolah
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Universitas Gadjah Mada</h3>
                    <p class="text-sm text-gray-500">ID Card Lanyard • 8.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div x-show="active === 'all' || active === 'corporate'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&q=80"
                         alt="Lanyard Bank BCA"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Corporate
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Bank BCA</h3>
                    <p class="text-sm text-gray-500">Lanyard Premium Woven • 10.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div x-show="active === 'all' || active === 'event'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=600&q=80"
                         alt="Lanyard Indonesia Startup Week"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Event
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Indonesia Startup Week</h3>
                    <p class="text-sm text-gray-500">Lanyard 2cm Custom • 4.500 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div x-show="active === 'all' || active === 'school'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&q=80"
                         alt="Lanyard Institut Teknologi Bandung"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Sekolah
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Institut Teknologi Bandung</h3>
                    <p class="text-sm text-gray-500">Lanyard Mahasiswa • 12.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 7 -->
            <div x-show="active === 'all' || active === 'corporate'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80"
                         alt="Lanyard Pertamina"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Corporate
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Pertamina</h3>
                    <p class="text-sm text-gray-500">Lanyard Safety • 6.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 8 -->
            <div x-show="active === 'all' || active === 'event'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=600&q=80"
                         alt="Lanyard Java Jazz Festival"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Event
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Java Jazz Festival 2026</h3>
                    <p class="text-sm text-gray-500">Premium VIP Lanyard • 15.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 9 -->
            <div x-show="active === 'all' || active === 'corporate'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=600&q=80"
                         alt="Lanyard Tokopedia"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Corporate
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Tokopedia</h3>
                    <p class="text-sm text-gray-500">Lanyard Karyawan • 3.500 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 10 -->
            <div x-show="active === 'all' || active === 'school'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=80"
                         alt="Lanyard SMA Negeri 1 Jakarta"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Sekolah
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">SMA Negeri 1 Jakarta</h3>
                    <p class="text-sm text-gray-500">Lanyard Siswa • 2.500 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 11 -->
            <div x-show="active === 'all' || active === 'event'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1559223607-a43c990c692c?w=600&q=80"
                         alt="Lanyard PON XXI"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Event
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">PON XXI Aceh-Sumut</h3>
                    <p class="text-sm text-gray-500">Lanyard Panitia & Atlet • 20.000 pcs</p>
                </div>
            </div>

            <!-- Portfolio Item 12 -->
            <div x-show="active === 'all' || active === 'corporate'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group card-lift">
                <div class="bg-[#e8e6e1] aspect-square relative overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80"
                         alt="Lanyard Kementerian BUMN"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1.5 bg-white/90 backdrop-blur-sm text-gray-900 text-xs font-medium">
                            Corporate
                        </span>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">Kementerian BUMN</h3>
                    <p class="text-sm text-gray-500">Lanyard Official • 7.500 pcs</p>
                </div>
            </div>

        </div>

        <!-- Load More -->
        <div class="text-center mt-16" data-reveal>
            <button class="px-8 py-4 bg-gray-900 text-white font-medium hover:bg-gray-800 transition-all hover:scale-[1.02]">
                Lihat Lebih Banyak
            </button>
        </div>
    </div>
</section>

<!-- Client Section -->
<section class="py-20 bg-[#f8f7f4]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-4">Dipercaya Berbagai Industri</h2>
            <p class="text-gray-600">Klien kami tersebar di seluruh Indonesia</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="bg-white p-6 flex items-center justify-center h-24 card-lift">
                <span class="text-gray-700 font-medium">Energi</span>
            </div>
            <div class="bg-white p-6 flex items-center justify-center h-24 card-lift">
                <span class="text-gray-700 font-medium">Perbankan</span>
            </div>
            <div class="bg-white p-6 flex items-center justify-center h-24 card-lift">
                <span class="text-gray-700 font-medium">Pemerintahan</span>
            </div>
            <div class="bg-white p-6 flex items-center justify-center h-24 card-lift">
                <span class="text-gray-700 font-medium">Korporasi</span>
            </div>
            <div class="bg-white p-6 flex items-center justify-center h-24 card-lift">
                <span class="text-gray-700 font-medium">Kampus</span>
            </div>
            <div class="bg-white p-6 flex items-center justify-center h-24 card-lift">
                <span class="text-gray-700 font-medium">Sekolah</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-6">
                Ingin Hasil Seperti Ini?
            </h2>
            <p class="text-gray-600 mb-8 leading-relaxed">
                Konsultasikan kebutuhan lanyard Anda. Kami bantu pilih bahan, cetak, dan finishing yang paling pas untuk kebutuhan Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20pembuatan%20lanyard"
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gray-900 text-white font-medium hover:bg-gray-800 transition-all hover:scale-[1.02]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Konsultasi via WhatsApp
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

