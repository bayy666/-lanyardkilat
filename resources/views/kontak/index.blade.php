@extends('layouts.app')

@section('title', 'Hubungi Kami - LanyardKendal')
@section('description', 'Hubungi LanyardKendal untuk konsultasi kebutuhan lanyard custom Anda. Respon cepat di jam operasional.')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-[#e8e4df]">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center mb-16" data-reveal>
            <p class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-4">📞 KONTAK</p>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                Hubungi Kami
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Ada pertanyaan atau mau konsultasi desain? Tim kami siap bantu dengan respon cepat di jam operasional.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-3" data-reveal data-reveal-delay="1">
                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white text-gray-700 shadow-sm">
                    ✓ Konsultasi Gratis
                </span>
                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white text-gray-700 shadow-sm">
                    ✓ Respon Cepat via WhatsApp
                </span>
                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-white text-gray-700 shadow-sm">
                    ✓ Estimasi Express 1 Hari*
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Contact Form -->
            <div data-reveal>
                <div class="bg-[#f8f7f4] rounded-2xl p-8 lg:p-12">
                    <h2 class="text-3xl text-gray-900 mb-4">Kirim Pesan</h2>
                    <p class="text-gray-600 mb-8">Isi form di bawah ini dan tim kami akan segera menghubungi Anda</p>

                    @if(session('success'))
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg flex items-start">
                        <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif

                    <form action="{{ route('kontak.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap *</label>
                            <input type="text"
                                   id="nama"
                                   name="nama"
                                   value="{{ old('nama') }}"
                                   required
                                class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:border-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900/10 transition-all @error('nama') border-red-500 @enderror"
                                   placeholder="Masukkan nama lengkap Anda">
                            @error('nama')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email *</label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:border-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900/10 transition-all @error('email') border-red-500 @enderror"
                                   placeholder="email@example.com">
                            @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Telepon -->
                        <div>
                            <label for="telepon" class="block text-gray-700 font-medium mb-2">Nomor Telepon *</label>
                            <input type="tel"
                                   id="telepon"
                                   name="telepon"
                                   value="{{ old('telepon') }}"
                                   required
                                class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:border-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900/10 transition-all @error('telepon') border-red-500 @enderror"
                                   placeholder="08123456789">
                            @error('telepon')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Pesan -->
                        <div>
                            <label for="pesan" class="block text-gray-700 font-medium mb-2">Pesan *</label>
                            <textarea id="pesan"
                                      name="pesan"
                                      rows="5"
                                      required
                                      class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:border-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900/10 transition-all @error('pesan') border-red-500 @enderror"
                                      placeholder="Ceritakan kebutuhan lanyard Anda...">{{ old('pesan') }}</textarea>
                            @error('pesan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                                class="w-full bg-gray-900 text-white py-4 font-medium hover:bg-gray-800 transition-all hover:scale-[1.02] active:scale-[0.98]">
                            Kirim Pesan
                        </button>

                        <p class="text-sm text-gray-500 pt-2">
                            *Estimasi bisa berubah tergantung antrian & kompleksitas desain.
                        </p>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="space-y-6" data-reveal data-reveal-delay="1">

                <!-- WhatsApp -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow card-lift">
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-500 p-4 rounded-full flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-medium text-gray-900 mb-2">WhatsApp</h3>
                            <p class="text-gray-600 mb-4">Chat langsung dengan tim kami untuk respons cepat</p>
                            <a href="https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20pembuatan%20lanyard"
                               target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center text-gray-900 font-medium hover:text-green-600 transition-colors">
                                +62 813-1650-9191
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow card-lift">
                    <div class="flex items-start space-x-4">
                        <div class="bg-gray-900 p-4 rounded-full flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600 mb-4">Kirim email untuk pertanyaan detail</p>
                            <a href="mailto:contact@lanyardkendal.com"
                               class="inline-flex items-center text-gray-900 font-medium hover:text-gray-600 transition-colors">
                                contact@lanyardkendal.com
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                            <br>
                            <a href="mailto:marketing@lanyardkendal.com"
                               class="inline-flex items-center text-gray-900 font-medium hover:text-gray-600 mt-2 transition-colors">
                                marketing@lanyardkendal.com
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow card-lift">
                    <div class="flex items-start space-x-4">
                        <div class="bg-gray-900 p-4 rounded-full flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Alamat</h3>
                            <p class="text-gray-600 mb-4">
                                Jl. Cifor Batuhulung No.Rt.03/02, Balungbangjaya, <br>
                                Kec. Bogor Bar., Kota Bogor, <br>
                                Jawa Barat 16116
                            </p>
                            <a href="https://www.google.com/maps/search/?api=1&query=Jl.%20Cifor%20Batuhulung%20No.Rt.03%2F02%2C%20Balungbangjaya%2C%20Kec.%20Bogor%20Bar.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016116"
                               target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center text-gray-900 font-medium hover:text-gray-600 transition-colors">
                                Lihat di Google Maps
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow card-lift">
                    <div class="flex items-start space-x-4">
                        <div class="bg-gray-900 p-4 rounded-full flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Jam Operasional</h3>
                            <div class="space-y-2 text-gray-600">
                                <p class="flex justify-between">
                                    <span class="font-medium">Senin - Sabtu:</span>
                                    <span>07:00 - 22:00 WIB</span>
                                </p>
                                <p class="flex justify-between">
                                    <span class="font-medium">Minggu:</span>
                                    <span class="text-red-600 font-medium">TUTUP</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-24 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center mb-12">
            <p class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-4">📍 LOKASI</p>
            <h2 class="text-3xl sm:text-4xl text-gray-900 mb-4">Temukan Kami</h2>
            <p class="text-lg text-gray-600">Kunjungi workshop kami di Bogor</p>
        </div>

        <div class="bg-white rounded-2xl overflow-hidden shadow-sm">
            <div class="aspect-video bg-gray-100">
                <iframe
                    src="https://www.google.com/maps?q=Jl.%20Cifor%20Batuhulung%20No.Rt.03%2F02%2C%20Balungbangjaya%2C%20Kec.%20Bogor%20Bar.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016116&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    class="w-full h-full">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- Social Media -->
<section class="py-24 bg-white" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24 text-center">
        <p class="text-xs tracking-[0.2em] text-gray-500 uppercase mb-4">🌐 SOSIAL MEDIA</p>
        <h2 class="text-3xl sm:text-4xl text-gray-900 mb-4">Ikuti Kami</h2>
        <p class="text-lg text-gray-600 mb-10">Update terbaru dan inspirasi desain lanyard</p>

        <div class="flex justify-center space-x-4">
            <a href="https://web.facebook.com/profile.php?id=100093289943847"
               target="_blank" rel="noopener noreferrer"
               class="w-14 h-14 bg-gray-900 rounded-full flex items-center justify-center hover:bg-gray-700 transition-all hover:scale-110">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>

            <a href="https://www.instagram.com/lanyardkendal.official/"
               target="_blank" rel="noopener noreferrer"
               class="w-14 h-14 bg-gray-900 rounded-full flex items-center justify-center hover:bg-gray-700 transition-all hover:scale-110">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>

            <a href="https://www.tiktok.com/@lanyardkendalofficial"
               target="_blank" rel="noopener noreferrer"
               class="w-14 h-14 bg-gray-900 rounded-full flex items-center justify-center hover:bg-gray-700 transition-all hover:scale-110">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection

