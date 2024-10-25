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
        Package::create([
            'packageName' => 'Video Youtube, Instagram',
            'service_provider_id' => 1,
            'description' => 'Anda bisa menggunakan untuk berbagai tujuan, mulai dari video iklan Youtube, Facebook, Instagram ataupun untuk mempromosikan suatu produk serta jasa di website Anda sendiri.',
            'price' => 225000,
            'duration' => '3 - 5 days',
            'revisions' => '2'
        ]);
        Package::create([
            'packageName' => 'Video Animasi 2D',
            'service_provider_id' => 1,
            'description' => 'Video animasi 2D biasanya digunakan sebagai explainer video, yaitu video animasi yang menjelaskan suatu produk atau jasa.',
            'price' => 225000,
            'duration' => '3 - 5 days',
            'revisions' => '2'
        ]);
        Package::create([
            'packageName' => 'Video Animasi 3D',
            'service_provider_id' => 1,
            'description' => 'Pembuatan video 3D umumnya membutuhkan waktu lama dan biaya besar. Tapi kami di Ebisee berhasil menemukan metode yang mampu menghasilkan video 3D berkualitas, hanya dalam hitungan hari dengan harga yang lebih murah dibanding lainnya.',
            'price' => 325000,
            'duration' => '7 days',
            'revisions' => '3'
        ]);
    }
}
