<?php

namespace Database\Seeders;

use App\Models\ServiceProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class serviceproviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Ebisee
        ServiceProvider::create([
            'name' => 'Ebisee',
            'short_description' => 
            'Setiap layanan yang ditawarkan Ebisee, dibuat dengan konsep: 
            "Jasa yang memberikan manfaat sebesar mungkin kepada klien, dengan harga yang terjangkau.
            Ebisee tidak pernah berhenti berinovasi dengan selalu mengikuti trend terkini, 
            teknologi terbaru dan menggunakannya demi memberikan hasil terbaik kepada klien kami.',
            'rating' => 4.83,
            'category_id' => 1,
            'admin_id' => 1,
            'start_from' => 150000,
            'email' => 'ebisee@gmail.com',
            'whatsapp_number' => '+62-889-9823-6445',
            'link_porto' => 'https://drive.google.com/drive/folders/1fCAP4KYy5sphlplYcInrSHGhjgDagDr4?usp=sharing',
            'link_photo' => '/Services/Ebisee.png'
        ]);
        //Digitally
        ServiceProvider::create([
            'name' => 'Digitally',
            'short_description' => 
            'We serve as a comprehensive solution for businesses, 
            covering a diverse scale that includes Micro, Small, and Medium Enterprises (UMKM), 
            local enterprises in the private and public sectors, state-owned corporations, government entities, 
            and international as well as multinational companies.',
            'rating' => 4.88,
            'category_id' => 3,
            'admin_id' => 2,
            'start_from' => 500000,
            'email' => 'digitally@gmail.com',
            'whatsapp_number' => '+62-828-8473-7612',
            'link_porto' => '',
            'link_photo' => '/Services/Digitally.png'
        ]);
        //REKA
        ServiceProvider::create([
            'name' => 'REKA',
            'short_description' => 
            'We are imaginative visionaries excelling in
            captivating visuals via photography and videography with a unique spin on branding
            and strategy. We curate a distinctive blend of creative inisghts that aims to make a
            lasting impression',
            'category_id' => 3,
            'admin_id' => 3,
            'rating' => 4.93,
            'start_from' => 250000,
            'email' => 'reka@gmail.com',
            'whatsapp_number' => '+62-815-6755-9495',
            'link_porto' => 'https://www.ruangreka.id/works?category=videography',
            'link_photo' => '/Services/Reka.png'
        ]);
        // jasafotoprodukjkt
        ServiceProvider::create([
            'name' => 'jasafotoprodukjkt',
            'short_description' => 
            '"PRODUCT & FASHION PHOTOGRAPHY:
            Layanan produksi terpadu yang mencakup berbagai kebutuhan kreatif dalam satu paket lengkap, mulai dari pencarian dan pengelolaan talenta profesional (model, fotografer, hingga kreator visual), penataan dan styling produk secara estetik dan presisi, layanan makeup artist (MUA) berpengalaman untuk memastikan setiap tampilan sesuai konsep, hingga pembuatan video berkualitas tinggi yang mendukung visual branding secara optimal."',
            'category_id' => 3,
            'admin_id' => 4,
            'rating' => 4.85,
            'start_from' => 100000,
            'email' => 'jasafotoprodukjkt@gmail.com',
            'whatsapp_number' => '+62-812-8590-8800',
            'link_porto' => '',
            'link_photo' => '/Services/jasaFotoProduk.jpg',
        ]);
        // JasaAnimasi
        ServiceProvider::create([
            'name' => 'JasaAnimasi',
            'short_description' => 
            'Sudah berdiri dan berkarya sejak tahun 2015 dan telah berhasil membuat project – project dengan kepuasan pelanggan baik dari dalam negeri hingga mancanegara.',
            'category_id' => 4,
            'admin_id' => 5,
            'rating' => 4.9,
            'start_from' => 300000,
            'email' => 'jasaanimasi@gmail.com',
            'whatsapp_number' => '+62 812-9919-5289',
            'link_porto' => 'https://jasaanimasi.com/portofolio/',
            'link_photo' => '/Services/jasaAnimasi.jpg',
        ]);

        // Dipro
        ServiceProvider::create([
            'name' => 'Dipro',
            'short_description' => 
            'Dibawah naungan PT.Satria Karya Vikrama Sudah lebih dari 867+ klien di seluruh Indonesia telah mempercayai untuk menggunakan jasa Digital Promo. Karena kami membantu semua pengusaha yang tidak punya pengalaman, tidak mempunyai skil, dan tidak mempunyai waktu untuk membuat desain tertentu. Anda cukup bersantai , dan biarkan kami yang merangkai.',
            'category_id' => 4,
            'admin_id' => 6,
            'rating' => 4.87,
            'start_from' => 400000,
            'email' => 'dipro@gmail.com',
            'whatsapp_number' => '+62 812-3123-5588',
            'link_porto' => 'https://youtu.be/QMuIXeam5_M',
            'link_photo' => '/Services/dipro.jpg',
        ]);

        // jasaFotoJakarta
        ServiceProvider::create([
            'name' => 'jasafotojakarta',
            'short_description' => 
            '"Sebagai Food Photographer & Videographer profesional di Jakarta, kami menawarkan layanan lengkap mulai dari pemotretan dan pembuatan video berkualitas tinggi hingga desain buku menu yang menarik, dengan fokus pada setiap detail untuk meningkatkan daya tarik visual dan mendukung branding bisnis kuliner Anda."',
            'category_id' => 3,
            'admin_id' => 7,
            'rating' => 4.89,
            'start_from' => 500000,
            'email' => 'jasafotojakarta@gmail.com',
            'whatsapp_number' => '+62 895-3011-1163',
            'link_porto' => '',
            'link_photo' => '/Services/jasaFotoJakarta.jpg',
        ]);

        // Foto.laku
        ServiceProvider::create([
            'name' => 'foto.laku',
            'short_description' => 
            'Fokus membantu toko jadi brand lewat foto produk berkualitas. Mulai dari 90rb!🔥#TOKOJADIBRAND.',
            'category_id' => 3,
            'admin_id' => 8,
            'rating' => 4.94,
            'start_from' => 90000,
            'email' => 'foto.laku@gmail.com',
            'whatsapp_number' => '+62 813-2359-5105',
            'link_porto' => 'https://fotolaku.com/id/bio/?fbclid=PAZXh0bgNhZW0CMTEAAaYniRZSp5VCBSaH9E4d9IMNGxo287iLeE3d4Vs_XoeyaW-jTJfJO6Wn5Kg_aem_f0vZECbuflWbr_tWBEFgoA',
            'link_photo' => '/Services/fotoLaku.jpg',
        ]);

        // videoproduk.co.id
        ServiceProvider::create([
            'name' => 'videoproduk.co.id',
            'short_description' => 
            'Jasa Pembuatan Video 3D, Campaign, CGI, dan TVC:
            Kami menyediakan berbagai layanan video kreatif, mulai dari animasi 3D, video campaign, dan efek CGI hingga TVC (Television Commercial). Kami juga ahli dalam pembuatan konten singkat seperti short video, reels Instagram, dan TikTok untuk meningkatkan engagement dan memperkuat branding Anda di berbagai platform digital.',
            'category_id' => 1,
            'admin_id' => 9,
            'rating' => 4.95,
            'start_from' => 250000,
            'email' => 'videoproduk@gmail.com',
            'whatsapp_number' => '+62 812-9000-8345',
            'link_porto' => '',
            'link_photo' => '/Services/videoproduk.co.id.png'
        ]);


    }
}
