<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        date_default_timezone_set('Asia/Jakarta');
        Chat::create([
            'chat_room_id' => 1,
            'message' => 'Halo, ada yang bisa saya bantu?',
            'senderuser' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        Chat::create([
            'chat_room_id' => 2,
            'message' => 'Halo, ada yang bisa saya bantu?',
            'senderuser' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
