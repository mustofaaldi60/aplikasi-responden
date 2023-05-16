<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Responden;

class RespondenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Responden::factory(50)->create();
    }
}