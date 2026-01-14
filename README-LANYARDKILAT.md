# 🚀 LanyardKilat - Website Lanyard Custom

Website modern dan profesional untuk bisnis cetak lanyard custom dengan fitur lengkap dan desain menarik.

## ✨ Fitur Utama

### 🎨 Design Modern
- Hero section dengan animasi blob yang menarik
- Gradient colors yang elegan
- Smooth scroll animations menggunakan AOS
- Fully responsive design (Mobile, Tablet, Desktop)
- Dark mode ready
- Hover effects yang smooth

### 📄 Halaman Lengkap
1. **Home** - Hero section, Features, Products preview, Testimonials, CTA
2. **Produk** - Grid produk dengan pricing, Spesifikasi, FAQ accordion
3. **Tentang Kami** - Company info, Stats, Vision/Mission, Team
4. **Portfolio** - Grid portfolio dengan filter, Client logos
5. **Kontak** - Contact form dengan validasi, Map, Social media links

### 🎯 Komponen
- ✅ Sticky Navbar dengan animasi scroll
- ✅ Comprehensive Footer dengan semua links
- ✅ WhatsApp Float Button
- ✅ Contact Form dengan validasi Laravel
- ✅ Product Cards dengan hover effects
- ✅ Testimonial cards
- ✅ Portfolio grid dengan filter interaktif
- ✅ FAQ Accordion
- ✅ Trust indicators & Stats
- ✅ CTA sections

### 🛠️ Teknologi
- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS v4
- **Build Tool**: Vite 6
- **Animations**: AOS (Animate On Scroll)
- **Icons**: Heroicons (SVG)
- **Interactivity**: Alpine.js

## 📋 Persyaratan Sistem

- PHP >= 8.2
- Composer
- Node.js >= 18
- NPM atau Yarn

## 🚀 Cara Install & Menjalankan

### 1. Clone atau Download Project
```bash
cd c:\laragon\www\coba-lanyardkilat
```

### 2. Install Dependencies PHP
```bash
composer install
```

### 3. Setup Environment
```bash
# Copy file .env.example ke .env
copy .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Install Dependencies Node.js
```bash
npm install
```

### 5. Jalankan Development Server

**Terminal 1 - Vite (untuk compile CSS/JS):**
```bash
npm run dev
```

**Terminal 2 - Laravel Server:**
```bash
php artisan serve
```

### 6. Akses Website
Buka browser dan akses:
```
http://localhost:8000
```

## 📁 Struktur File Penting

```
coba-lanyardkilat/
├── app/
│   └── Http/
│       └── Controllers/
│           └── HomeController.php          # Controller utama
├── resources/
│   ├── css/
│   │   └── app.css                         # Custom CSS
│   ├── js/
│   │   └── app.js                          # JavaScript
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php               # Layout utama
│       │   └── partials/
│       │       ├── navbar.blade.php        # Navbar component
│       │       └── footer.blade.php        # Footer component
│       ├── home/
│       │   └── index.blade.php             # Halaman Home
│       ├── produk/
│       │   └── index.blade.php             # Halaman Produk
│       ├── tentang/
│       │   └── index.blade.php             # Halaman Tentang
│       ├── portfolio/
│       │   └── index.blade.php             # Halaman Portfolio
│       └── kontak/
│           └── index.blade.php             # Halaman Kontak
├── routes/
│   └── web.php                             # Routes definition
├── package.json                            # Node dependencies
├── vite.config.js                          # Vite configuration
└── tailwind.config.js                      # Tailwind configuration (jika ada)
```

## 🎨 Customisasi

### Mengubah Warna
Edit file `resources/css/app.css` atau gunakan Tailwind utility classes di view files.

### Mengubah Konten
Edit file blade di folder `resources/views/`:
- Home: `home/index.blade.php`
- Produk: `produk/index.blade.php`
- Tentang: `tentang/index.blade.php`
- Portfolio: `portfolio/index.blade.php`
- Kontak: `kontak/index.blade.php`

### Mengubah Navbar/Footer
Edit:
- Navbar: `resources/views/layouts/partials/navbar.blade.php`
- Footer: `resources/views/layouts/partials/footer.blade.php`

## 📱 Fitur WhatsApp

WhatsApp button sudah terintegrasi dengan nomor: **+62 813-1650-9191**

Untuk mengubah nomor WhatsApp, cari dan replace:
```
6281316509191
```

## 🎯 Route List

| Route | URL | Halaman |
|-------|-----|---------|
| home | / | Halaman Home |
| produk | /produk | Halaman Produk |
| tentang | /tentang | Tentang Kami |
| portfolio | /portfolio | Portfolio |
| kontak | /kontak | Kontak (GET) |
| kontak.submit | /kontak | Submit Form (POST) |

## 🔧 Build untuk Production

Untuk compile assets untuk production:

```bash
npm run build
```

Assets yang sudah di-compile akan ada di folder `public/build/`

## 📊 Optimasi

### Performance
- Lazy loading images
- Minified CSS & JS
- Optimized animations
- Efficient code splitting

### SEO
- Meta tags sudah di-setup
- Semantic HTML
- Alt text pada images
- Clean URLs

## 🐛 Troubleshooting

### Vite tidak jalan
```bash
# Hapus node_modules dan install ulang
Remove-Item -Recurse -Force node_modules
npm install
npm run dev
```

### Tailwind tidak terload
Pastikan Vite sudah running dengan `npm run dev`

### Error 500
Pastikan `.env` sudah di-setup dan `APP_KEY` sudah di-generate

## 📞 Kontak & Support

- **Website**: lanyardkilat.co.id
- **WhatsApp**: +62 813-1650-9191
- **Email**: contact@lanyardkilat.com

## 📝 License

This project is proprietary software created for LanyardKilat.

## 🎉 Credits

Developed with ❤️ for LanyardKilat

---

**Happy Coding!** 🚀
