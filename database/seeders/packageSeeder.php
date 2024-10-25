<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class packageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ebisee
        Package::create([
            'packageName' => 'Video Youtube, Instagram',
            'service_provider_id' => 1,
            'description' => 'Anda bisa menggunakan untuk berbagai tujuan, mulai dari video iklan Youtube, Facebook, Instagram ataupun untuk mempromosikan suatu produk serta jasa di website Anda sendiri.',
            'price' => 225000,
            'duration' => '3 - 5 days',
            'revisions' => 2
        ]);
        Package::create([
            'packageName' => 'Video Animasi 2D',
            'service_provider_id' => 1,
            'description' => 'Video animasi 2D biasanya digunakan sebagai explainer video, yaitu video animasi yang menjelaskan suatu produk atau jasa.',
            'price' => 225000,
            'duration' => '3 - 5 days',
            'revisions' => 2
        ]);
        Package::create([
            'packageName' => 'Video Animasi 3D',
            'service_provider_id' => 1,
            'description' => 'Pembuatan video 3D umumnya membutuhkan waktu lama dan biaya besar. Tapi kami di Ebisee berhasil menemukan metode yang mampu menghasilkan video 3D berkualitas, hanya dalam hitungan hari dengan harga yang lebih murah dibanding lainnya.',
            'price' => 325000,
            'duration' => '7 days',
            'revisions' => 3
        ]);

        //Digitally
        Package::create([
            'packageName' => 'Photo & Edit',
            'service_provider_id' => 2,
            'description' => 'Photography visual branding is the art of crafting a distinct and memorable visual identity through photography. We serve several types of photography branding such as food photography, product photography, fashion photography, corporate photography, commercial and advertising photography, interior photography, etc., to meet your branding needs, especially on social media such as Instagram feeds, reels, or TikTok.',
            'price' => 500000,
            'duration' => '4 - 7 days',
            'revisions' => 4
        ]);
        Package::create([
            'packageName' => 'Video & Edit',
            'service_provider_id' => 2,
            'description' => 'We believe in making your vision come to life through our lens. Our videography brand works closely with clients to understand their unique requirements and desires, ensuring that the final product reflects their individuality. We serve several types of videography to fulfill your branding needs on social media platforms like TikTok, Instagram, and YouTube. This videography service creates short-form engaging shareable videos.',
            'price' => 750000,
            'duration' => '6 - 9 days',
            'revisions' => 3,
        ]);

        // REKA
        Package::create([
            'packageName' => 'Photo & Edit',
            'service_provider_id' => 3,
            'description' => 'Kami menghadirkan layanan fotografi yang tidak hanya menangkap gambar, tetapi juga menggambarkan cerita di balik setiap momen. Dengan pendekatan yang penuh imajinasi dan perhatian terhadap detail, kami menciptakan karya visual yang unik dan memukau.',
            'price' => 450000,
            'duration' => '3 - 5 days',
            'revisions' => 4,
        ]);
        Package::create([
            'packageName' => 'Video & Edit',
            'service_provider_id' => 3,
            'description' => 'Kami menawarkan layanan videografi kreatif yang mencakup pembuatan video 3D, campaign, efek CGI, dan TVC (Television Commercial). Selain itu, kami juga mengkhususkan diri dalam membuat konten pendek seperti short video, reels Instagram, dan TikTok untuk membantu meningkatkan engagement dan memperkuat branding Anda di berbagai platform digital.',
            'price' => 750000,
            'duration' => '6 - 9 days',
            'revisions' => 3,
        ]);

        // jasafotoproduk
        Package::create([
            'packageName' => 'Photo & Photo Editing',
            'service_provider_id' => 4,
            'description' => "Highlighting your products in the best possible way, we create professional images that enhance your brand's visual appeal.",
            'price' => 100000,
            'duration' => '2 - 4 days',
            'revisions' => 1,
        ]);
        Package::create([
            'packageName' => 'Video & Video Editing',
            'service_provider_id' => 4,
            'description' => "Highlighting your products in the best possible way, we create professional videos that enhance your brand's visual appeal.",
            'price' => 300000,
            'duration' => '2 - 4 days',
            'revisions' => 2
        ]);

        // jasaAnimasi
        Package::create([
            'packageName' => 'Video Editing',
            'service_provider_id' => 5,
            'description' => 'Jika anda ingin membuat tampilan video semakin menarik dan lebih professional, serahkan saja kepada kami, karena kami akan membuat video anda menjadi lebih berkualitas dan nyaman ditonton, anda akan terkesan dengan hasil video editing dari team kami.',
            'price' => 300000,
            'duration' => '4 - 6 days',
            'revisions' => 2
        ]);
        Package::create([
            'packageName' => 'Video Animation',
            'service_provider_id' => 5,
            'description' => 'Jasa animasi sudah mulai berkarya sejak 2015, dan memiliki team yang sudah sangat berpengalaman di bidangnya masing – masing dalam membuat video animasi untuk berbagai kebutuhan.',
            'price' => 500000,
            'duration' => '4 - 11 days',
            'revisions' => 2
        ]);

        // Dipro
        Package::create([
            'packageName' => 'Video Animation',
            'service_provider_id' => 6,
            'description' => 'Percantik Bisnismu Dengan Sentuhan Terbaik Kami, Biar DIPRO aja Yang Kerjain, Anda Tidak Perlu REPOT !.',
            'price' => 400000,
            'duration' => '6- 13 days',
            'revisions' => 2
        ]);

        // jasa Foto Jakarta
        Package::create([
            'packageName' => 'Video & Edit',
            'service_provider_id' => 7,
            'description' => 'Sebagai Food Videographer di Jakarta, kami membuat video berkualitas tinggi yang menampilkan hidangan secara menggugah selera dan memperkuat branding bisnis kuliner Anda.',
            'price' => 1000000,
            'duration' => '5 - 7 days',
            'revisions' => 2,
        ]);
        Package::create([
            'packageName' => 'Photo & Edit',
            'service_provider_id' => 7,
            'description' => 'Food Photographer di Jakarta yang menghadirkan foto berkualitas tinggi untuk menampilkan hidangan secara menggugah selera dan memperkuat citra bisnis Anda.',
            'price' => 500000,
            'duration' => '5 - 7 days',
            'revisions' => 3
        ]);

        // FotoLaku
        Package::create([
            'packageName' => 'Video Editing',
            'service_provider_id' => 8,
            'description' => 'Sebagai Food Videographer di Jakarta, kami membuat video berkualitas tinggi yang menampilkan hidangan secara menggugah selera dan memperkuat branding bisnis kuliner Anda.',
            'price' => 300000,
            'duration' => '3 - 5 days',
            'revisions' => 4
        ]);
        Package::create([
            'packageName' => 'Photo Editing',
            'service_provider_id' => 8,
            'description' => 'Kami hadir untuk membantu toko Anda berkembang menjadi brand melalui foto produk berkualitas yang menarik perhatian dan meningkatkan penjualan. Mulai dari Rp90.000, setiap foto dipastikan menampilkan produk dengan detail dan estetika terbaik untuk memikat calon pelanggan.',
            'price' => 90000,
            'duration' => '3 - 5 days',
            'revisions' => 3
        ]);

        // videoproduk.co.id
        Package::create([
            'packageName' => 'Video Editing',
            'service_provider_id' => 9,
            'description' => 'VIDEO 3D, CAMPAIGN, CGI, TVC SHORT VIDEO, REELS TIKTOK, etc🚀',
            'price' => 250000,
            'duration' => '4 - 8 days',
            'revisions' => 3
        ]);
    }
}
