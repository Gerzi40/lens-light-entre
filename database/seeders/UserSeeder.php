<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'username' => 'garry',
            'email' => 'garry@gmail.com',
            'password' => Hash::make('garry123'),
            'dob' => '2024-11-15',
        ]);
        User::create([
            'username' => 'diki',
            'email' => 'diki@gmail.com',
            'password' => Hash::make('diki123'),
            'dob' => '2024-11-16',
        ]);
    }
}
