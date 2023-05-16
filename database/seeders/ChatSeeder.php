<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chat = array([
            'name' => 'Mustofa Aldi',
            'no_hp' => '(+62) 816-4506-911',
            'message' => 'Hello, World!'
        ]);

        implode(" ", $chat);

        Chat::create($chat);
    }
}
