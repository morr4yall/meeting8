<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class StarincController extends \Illuminate\Routing\Controller
{
    // Homepage
    public function index()
    {
        $featuredProduct = [
            'name' => 'C-Star Serum Stick',
            'tagline' => 'Serum stick pertama di Indonesia dengan 26% Vitamin C untuk membantu mencerahkan kulit dan menyamarkan kerutan.',
            'slogan' => '#VitCOnTheGo #STARInYou',
            'weight' => '11 gram',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC18AD6cbx3J-Y6PbUoIpA2M_0MYOlizG8tMLTqCEgMQ&s=10',
            'ingredients' => [
                ['title' => '26% Vitamin C', 'desc' => 'Kandungan yang disebutkan untuk C-Star Serum Stick.']
            ]
        ];

        return view('pages.home', compact('featuredProduct'));
    }

    // About Us
    public function about()
    {
        return view('pages.about');
    }

    // Products / Services
    public function products()
    {
        $products = [
            [
                'name' => 'C-Star Serum Stick',
                'category' => 'Skincare',
                'description' => 'Serum stick pertama di Indonesia dengan 26% Vitamin C yang membantu mencerahkan dan menyamarkan kerutan di wajah. Dapat digunakan sebagai primer agar make-up lebih menawan.',
                'size' => '11 gram',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC18AD6cbx3J-Y6PbUoIpA2M_0MYOlizG8tMLTqCEgMQ&s=10',
                'ingredients' => ['26% Vitamin C'],
                'bpom' => 'NA18231900060',
                'price' => 'Rp 285.000',
                'scent' => null,
                'benefits' => [
                    'Mencerahkan kulit',
                    'Menjadi primer agar make-up lebih tahan lama',
                    'Membantu menghilangkan dark spot dan dark circle',
                    'Anti-inflamasi',
                    'Anti-bakteri',
                    'Anti-aging',
                    'Mengontrol minyak berlebih',
                    'Meredakan jerawat',
                    'Menghaluskan kulit'
                ],
                'usage' => null
            ],
            [
                'name' => 'Dream Kissed',
                'category' => 'Body Cream',
                'description' => 'Ultimate Skin Nutrition body cream yang mampu melembapkan dan menutrisi kulit secara optimal.',
                'size' => '240 gram',
                'bpom' => 'NA18220110136',
                'price' => null,
                'scent' => null,
                'image' => 'https://www.starinc.co.id/auth/image/productdtl/1-3.png',
                'ingredients' => ['Vitamin C', 'Vitamin K', 'Vitamin E'],
                'benefits' => [
                    'Melembapkan kulit',
                    'Meremajakan kulit',
                    'Menutrisi kulit dengan Vitamin C, K, dan E',
                    'Mencerahkan kulit',
                    'Menenangkan kulit kemerahan',
                    'Mempercepat penyembuhan bekas luka dan jerawat',
                    'Memberikan perlindungan dari paparan sinar UV dan radikal bebas',
                    'Membantu mengurangi jerawat, penuaan, hiperpigmentasi, dan flek',
                    'Memperbaiki tekstur kulit'
                ],
                'usage' => null
            ],
            [
                'name' => 'Snow Kissed Seduce',
                'category' => 'Body Cream',
                'description' => 'Body serum untuk mendapatkan “Snow White Skin” dengan aroma Seduce yang menggoda.',
                'size' => '230 gram',
                'bpom' => 'NA18220110135',
                'price' => null,
                'scent' => 'King William Pear, Freesia, dan Patchouli',
                'image' => 'https://www.starinc.co.id/auth/image/productdtl/2-Sks.jpg',
                'ingredients' => ['Vitamin C', 'Vitamin K', 'Vitamin E'],
                'benefits' => [
                    'Melembapkan kulit',
                    'Meremajakan kulit',
                    'Menutrisi kulit dengan Vitamin C, K, dan E',
                    'Mencerahkan kulit',
                    'Menenangkan kulit kemerahan',
                    'Mempercepat penyembuhan bekas luka dan jerawat',
                    'Memberikan perlindungan dari paparan sinar UV dan radikal bebas',
                    'Membantu mengurangi acne, penuaan, hiperpigmentasi, dan flek',
                    'Memperbaiki tekstur kulit'
                ],
                'usage' => null
            ],
            [
                'name' => 'Confidence Burst',
                'category' => 'Deodorizer Serum Spray',
                'description' => 'Deodorant spray untuk membantu menghilangkan bau badan hingga 72 jam dan mencerahkan lipatan kulit.',
                'size' => '60ml',
                'bpom' => 'NA18220900367',
                'price' => 'Rp 135.000',
                'scent' => 'Aroma segar dan wangi',
                'image' => 'https://www.starinc.co.id/auth/image/productdtl/4-CB2.jpg',
                'ingredients' => [],
                'benefits' => [
                    'Menghilangkan bau badan sampai 72 jam',
                    'Menyamarkan kerutan',
                    'Mencerahkan warna kulit',
                    'Mudah digunakan karena berbentuk spray',
                    'Tidak lengket dan mudah menyerap',
                    'Tidak meninggalkan noda',
                    'Dapat digunakan di setiap lipatan tubuh',
                    'Memiliki aroma segar dan wangi'
                ],
                'usage' => 'Semprotkan secara rutin pada lipatan kulit (ketiak, siku, lutut) yang sudah bersih dan kering untuk hasil maksimal.'
            ],
        ];

        return view('pages.products', compact('products'));
    }

    // Blog / News
    public function blog()
    {
        $posts = [
            [
                'title' => 'Tips Merawat Skin Barrier dengan Praktis',
                'date' => '2026-10-20',
                'snippet' => 'Menjaga kesehatan kulit tidak perlu rumit. Simak cara pakai serum stick untuk perawatan harianmu.',
                'content' => [
                    'Skin barrier adalah lapisan pelindung kulit yang membantu menjaga kelembapan dan melindungi kulit dari faktor luar. Rutinitas yang sederhana dan konsisten dapat membantu merawatnya.',
                    'Bersihkan wajah dengan pembersih yang lembut dan hindari menggosok kulit terlalu keras. Setelah itu, gunakan pelembap untuk membantu menjaga kelembapan kulit.',
                    'Pada pagi hari, gunakan tabir surya sesuai petunjuk pemakaian. Jika memakai produk baru, coba terlebih dahulu pada area kecil kulit dan hentikan pemakaian bila muncul iritasi.',
                    'Serum stick dapat digunakan sesuai petunjuk pada kemasan sebagai bagian dari rutinitas perawatan. Pastikan kulit dan aplikator tetap bersih, dan jangan berbagi produk yang bersentuhan langsung dengan kulit.'
                ]
            ],
            [
                'title' => 'Kandungan Niacinamide dan Vitamin C untuk Kulit Sensitif',
                'date' => '2026-10-15',
                'snippet' => 'Kenali hal yang perlu diperhatikan saat memilih produk dengan Niacinamide dan Vitamin C.',
                'content' => [
                    'Niacinamide dan Vitamin C adalah bahan yang sering ditemukan dalam produk perawatan kulit. Respons kulit terhadap bahan aktif dapat berbeda-beda pada setiap orang.',
                    'Periksa daftar bahan dan petunjuk pemakaian pada kemasan. Untuk kulit sensitif, mulai dengan satu produk baru pada satu waktu dan gunakan secara bertahap sesuai petunjuk produk.',
                    'Lakukan uji coba pada area kecil terlebih dahulu. Jika timbul rasa tidak nyaman atau iritasi, hentikan penggunaan. Konsultasikan dengan dokter kulit bila keluhan berlanjut.'
                ]
            ]
        ];

        return view('pages.blog', compact('posts'));
    }

    // Contact Page
    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:10000',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }

    // Legal Info
    public function legal()
    {
        return view('pages.legal');
    }
}