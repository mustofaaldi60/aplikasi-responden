<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RequestLagu;

class RequestLaguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestLagu::factory(50)->create();
    }
}
