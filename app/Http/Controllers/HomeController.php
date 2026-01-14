<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function produk()
    {
        $products = [
            [
                'nama' => 'Lanyard 1.5 CM',
                'lebar' => '1.5 cm',
                'panjang' => '90 cm',
                'harga' => 7000,
                'fitur' => ['Polyester Tissue/Nylon', 'Hook & Stopper included', 'Print 2 sisi full warna', 'Gratis desain'],
                'popular' => false,
                'image' => 'lanyard-15cm.jpg'
            ],
            [
                'nama' => 'Lanyard 2 CM',
                'lebar' => '2 cm',
                'panjang' => '45 cm',
                'harga' => 8000,
                'fitur' => ['Polyester Tissue/Nylon', 'Hook & Stopper included', 'Print 2 sisi full warna', 'Gratis desain'],
                'popular' => true,
                'image' => 'lanyard-20cm.jpg'
            ],
            [
                'nama' => 'Lanyard 2.5 CM',
                'lebar' => '2.5 cm',
                'panjang' => '45 cm',
                'harga' => 10000,
                'fitur' => ['Polyester Tissue/Nylon', 'Hook & Stopper included', 'Print 2 sisi full warna', 'Gratis desain'],
                'popular' => false,
                'image' => 'lanyard-25cm.jpg'
            ],
        ];

        return view('produk.index', compact('products'));
    }

    public function tentang()
    {
        return view('tentang.index');
    }

    public function portfolio()
    {
        return view('portfolio.index');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function testimoni()
    {
        return view('testimoni.index');
    }

    public function kontak()
    {
        return view('kontak.index');
    }

    public function submitKontak(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'telepon' => 'required|max:20',
            'pesan' => 'required',
        ]);

        // Di sini bisa ditambahkan logic untuk menyimpan atau mengirim email

        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah dikirim. Tim kami akan segera menghubungi Anda.');
    }

    public function produkShow($slug)
    {
        // Data produk - bisa dipindahkan ke database nanti
        $products = [
            'lanyard-1-5cm' => [
                'name' => 'Lanyard 1.5 cm',
                'slug' => 'lanyard-1-5cm',
                'description' => 'Lanyard 1.5 cm dengan bahan polyester premium. Cocok untuk event, sekolah, dan perusahaan. Cetak full color dengan kualitas terbaik.',
                'price' => 'Rp.7000',
                'min_order' => '50 pcs',
                'badge' => 'Best Seller',
                'reviews' => 29,
                'images' => [
                    asset('images/products/lanyard-1-5cm.jpg'),
                    asset('images/products/lanyard-1-5cm-2.jpg'),
                    asset('images/products/lanyard-1-5cm-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Premium',
                    'Lebar' => '1.5 cm',
                    'Panjang' => '90 cm',
                    'Cetak' => 'Full Color 2 Sisi',
                    'Waktu Produksi' => '1-3 Hari',
                ],
                'features' => [
                    'Cetak sublimasi full color',
                    'Warna tidak mudah pudar',
                    'Free desain',
                    'Include stopper & hook',
                    'Garansi kualitas',
                ],
            ],
            'lanyard-2cm' => [
                'name' => 'Lanyard 2.0 cm',
                'slug' => 'lanyard-2cm',
                'description' => 'Lanyard 2 cm dengan bahan polyester premium. Ukuran standar yang paling populer untuk berbagai kebutuhan.',
                'price' => 'Rp.8000',
                'min_order' => '50 pcs',
                'badge' => 'Popular',
                'reviews' => 35,
                'images' => [
                    asset('images/products/lanyard-2cm.jpg'),
                    asset('images/products/lanyard-2cm-2.jpg'),
                    asset('images/products/lanyard-2cm-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Premium',
                    'Lebar' => '2 cm',
                    'Panjang' => '90 cm',
                    'Cetak' => 'Full Color 2 Sisi',
                    'Waktu Produksi' => '1-3 Hari',
                ],
                'features' => [
                    'Cetak sublimasi full color',
                    'Warna tidak mudah pudar',
                    'Free desain',
                    'Include stopper & hook',
                    'Garansi kualitas',
                ],
            ],
            'lanyard-2-5cm' => [
                'name' => 'Lanyard 2.5 cm',
                'slug' => 'lanyard-2-5cm',
                'description' => 'Lanyard 2.5 cm ukuran lebar dengan area cetak lebih besar. Ideal untuk logo dan desain yang detail.',
                'price' => 'Rp.9000',
                'min_order' => '50 pcs',
                'badge' => null,
                'reviews' => 22,
                'images' => [
                    asset('images/products/lanyard-2-5cm.jpg'),
                    asset('images/products/lanyard-2-5cm-2.jpg'),
                    asset('images/products/lanyard-2-5cm-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Premium',
                    'Lebar' => '2.5 cm',
                    'Panjang' => '90 cm',
                    'Cetak' => 'Full Color 2 Sisi',
                    'Waktu Produksi' => '1-3 Hari',
                ],
                'features' => [
                    'Cetak sublimasi full color',
                    'Area cetak lebih besar',
                    'Warna tidak mudah pudar',
                    'Free desain',
                    'Include stopper & hook',
                ],
            ],
            'id-card' => [
                'name' => 'Id Card',
                'slug' => 'id-card',
                'description' => 'ID Card custom dengan cetak full color. Desain profesional untuk karyawan dan event.',
                'price' => 'Rp.7000',
                'min_order' => '50 pcs',
                'badge' => null,
                'reviews' => 18,
                'images' => [
                    asset('images/products/id-card.jpg'),
                    asset('images/products/id-card-2.jpg'),
                    asset('images/products/id-card-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'PVC Premium',
                    'Ukuran' => '8.5 x 5.4 cm',
                    'Ketebalan' => '0.76 mm',
                    'Cetak' => 'Full Color 2 Sisi',
                    'Waktu Produksi' => '2-3 Hari',
                ],
                'features' => [
                    'Cetak full color',
                    'Tahan air & gores',
                    'Free desain',
                    'Bisa include foto',
                    'QR Code/Barcode',
                ],
            ],
            'wristband' => [
                'name' => 'Wristband',
                'slug' => 'wristband',
                'description' => 'Wristband custom untuk event, konser, dan festival. Bahan kain premium dengan print full color.',
                'price' => 'Rp.5000',
                'min_order' => '100 pcs',
                'badge' => 'Event',
                'reviews' => 24,
                'images' => [
                    asset('images/products/wristband.jpg'),
                    asset('images/products/wristband-2.jpg'),
                    asset('images/products/wristband-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Woven',
                    'Lebar' => '1.5 cm',
                    'Panjang' => '35 cm',
                    'Lock' => 'Plastic Lock',
                    'Waktu Produksi' => '3-5 Hari',
                ],
                'features' => [
                    'Cetak sublimasi full color',
                    'Lock sekali pakai',
                    'Cocok untuk event',
                    'Free desain',
                    'Tahan air',
                ],
            ],
            'card-holder' => [
                'name' => 'Card Holder',
                'slug' => 'card-holder',
                'description' => 'Card holder kulit sintetis premium untuk menyimpan ID card dengan elegan dan profesional.',
                'price' => 'Rp.15000',
                'min_order' => '50 pcs',
                'badge' => 'Premium',
                'reviews' => 16,
                'images' => [
                    asset('images/products/card-holder.jpg'),
                    asset('images/products/card-holder-2.jpg'),
                    asset('images/products/card-holder-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Kulit Sintetis',
                    'Ukuran' => '11 x 7 cm',
                    'Slot' => '1-2 Kartu',
                    'Tali' => 'Include Tali',
                    'Waktu Produksi' => '5-7 Hari',
                ],
                'features' => [
                    'Bahan kulit sintetis premium',
                    'Custom emboss logo',
                    'Berbagai pilihan warna',
                    'Include tali lanyard',
                    'Elegan & profesional',
                ],
            ],
            'lanyard-polyester' => [
                'name' => 'Lanyard Polyester',
                'slug' => 'lanyard-polyester',
                'description' => 'Lanyard polyester standar dengan kualitas cetak sublimasi. Pilihan ekonomis untuk kebutuhan massal.',
                'price' => 'Rp.8000',
                'min_order' => '50 pcs',
                'badge' => 'Ekonomis',
                'reviews' => 27,
                'images' => [
                    asset('images/products/lanyard-polyester.jpg'),
                    asset('images/products/lanyard-polyester-2.jpg'),
                    asset('images/products/lanyard-polyester-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Tissue',
                    'Lebar' => '2 cm',
                    'Panjang' => '90 cm',
                    'Cetak' => 'Full Color 2 Sisi',
                    'Waktu Produksi' => '1-3 Hari',
                ],
                'features' => [
                    'Harga ekonomis',
                    'Cetak sublimasi',
                    'Free desain',
                    'Include stopper & hook',
                    'Cocok untuk partai besar',
                ],
            ],
            'lanyard-satin' => [
                'name' => 'Lanyard Satin',
                'slug' => 'lanyard-satin',
                'description' => 'Lanyard satin dengan permukaan halus mengkilap. Tampilan elegan untuk acara formal dan premium.',
                'price' => 'Rp.9000',
                'min_order' => '50 pcs',
                'badge' => 'Elegan',
                'reviews' => 19,
                'images' => [
                    asset('images/products/lanyard-satin.jpg'),
                    asset('images/products/lanyard-satin-2.jpg'),
                    asset('images/products/lanyard-satin-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Satin Premium',
                    'Lebar' => '2 cm',
                    'Panjang' => '90 cm',
                    'Cetak' => 'Full Color 2 Sisi',
                    'Waktu Produksi' => '2-4 Hari',
                ],
                'features' => [
                    'Permukaan halus mengkilap',
                    'Tampilan elegan',
                    'Cetak sublimasi',
                    'Free desain',
                    'Include stopper & hook',
                ],
            ],
            'yoyo-id' => [
                'name' => 'Yoyo ID',
                'slug' => 'yoyo-id',
                'description' => 'Yoyo ID card dengan mekanisme retractable. Praktis untuk akses kartu tanpa melepas lanyard.',
                'price' => 'Rp.2500',
                'min_order' => '50 pcs',
                'badge' => 'Murah',
                'reviews' => 15,
                'images' => [
                    asset('images/products/yoyo-id.jpg'),
                    asset('images/products/yoyo-id-2.jpg'),
                    asset('images/products/yoyo-id-3.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Plastik ABS',
                    'Diameter' => '3.2 cm',
                    'Panjang Tali' => '60 cm',
                    'Clip' => 'Metal Clip',
                    'Waktu Produksi' => '1-2 Hari',
                ],
                'features' => [
                    'Retractable mechanism',
                    'Custom print logo',
                    'Praktis digunakan',
                    'Berbagai pilihan warna',
                    'Harga terjangkau',
                ],
            ],
        ];

        // Check if product exists
        if (!isset($products[$slug])) {
            abort(404);
        }

        $product = $products[$slug];

        // Get related products (exclude current)
        $relatedProducts = collect($products)
            ->filter(fn($p) => $p['slug'] !== $slug)
            ->take(4)
            ->map(fn($p) => [
                'name' => $p['name'],
                'slug' => $p['slug'],
                'price' => $p['price'],
                'reviews' => $p['reviews'],
                'image' => $p['slug'] . '.jpg',
            ])
            ->values()
            ->all();

        return view('produk.show', compact('product', 'relatedProducts'));
    }
}
