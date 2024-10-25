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
        ServiceProvider::create([
            'name' => 'Ebisee',
            'short_description' => 
            'Setiap layanan yang ditawarkan Ebisee, dibuat dengan konsep: 
            "Jasa yang memberikan manfaat sebesar mungkin kepada klien, dengan harga yang terjangkau.
            Ebisee tidak pernah berhenti berinovasi dengan selalu mengikuti trend terkini, 
            teknologi terbaru dan menggunakannya demi memberikan hasil terbaik kepada klien kami.',
            'category' => 'Video and Video editing',
            'start_from' => 150000,
            'email' => 'ebisee@gmail.com',
            'whatsapp_number' => '+6288998236445',
            'link_porto' => '',
            'link_photo' => '/Services/Ebisee.png'
        ]);
        ServiceProvider::create([
            'name' => 'Digitally',
            'short_description' => 
            'We serve as a comprehensive solution for businesses, 
            covering a diverse scale that includes Micro, Small, and Medium Enterprises (UMKM), 
            local enterprises in the private and public sectors, state-owned corporations, government entities, 
            and international as well as multinational companies.',
            'category' => 'Photo and Video',
            'start_from' => 500000,
            'email' => 'digitally@gmail.com',
            'whatsapp_number' => '+6282884737612',
            'link_porto' => '',
            'link_photo' => '/Services/Digitally.png'
        ]);
        ServiceProvider::create([
            'name' => 'REKA',
            'short_description' => 
            'We are imaginative visionaries excelling in
            captivating visuals via photography and videography with a unique spin on branding
            and strategy. We curate a distinctive blend of creative inisghts that aims to make a
            lasting impression',
            'category' => 'Photo and Video',
            'start_from' => 250000,
            'email' => 'reka@gmail.com',
            'whatsapp_number' => '+628156755949',
            'link_porto' => '',
            'link_photo' => '/Services/Reka.png'
        ]);
    }
}
