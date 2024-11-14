<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::create([
            'username' => 'Ebisee',
            'email' => 'ebisee@gmail.com',
            'password' => Hash::make('ebisee123'),
        ]);
        Admin::create([
            'username' => 'Digitally',
            'email' => 'digitally@gmail.com',
            'password' => Hash::make('digitally123'),
        ]);
        Admin::create([
            'username' => 'REKA',
            'email' => 'reka@gmail.com',
            'password' => Hash::make('reka123'),
        ]);
        Admin::create([
            'username' => 'jasafotoprodukjkt',
            'email' => 'jasafotoprodukjkt@gmail.com',
            'password' => Hash::make('jasafotoprodukjkt123'),
        ]);
        Admin::create([
            'username' => 'JasaAnimasi',
            'email' => 'jasaanimasi@gmail.com',
            'password' => Hash::make('jasaanimasi123'),
        ]);
        Admin::create([
            'username' => 'Dipro',
            'email' => 'dipro@gmail.com',
            'password' => Hash::make('dipro123'),
        ]);
        Admin::create([
            'username' => 'jasafotojakarta',
            'email' => 'jasafotojakarta@gmail.com',
            'password' => Hash::make('jasafotojakarta123'),
        ]);
        Admin::create([
            'username' => 'foto.laku',
            'email' => 'foto.laku@gmail.com',
            'password' => Hash::make('foto.laku123'),
        ]);
        Admin::create([
            'username' => 'videoproduk.co.id',
            'email' => 'videoproduk@gmail.com',
            'password' => Hash::make('videoproduk123'),
        ]);
        
    }
}
