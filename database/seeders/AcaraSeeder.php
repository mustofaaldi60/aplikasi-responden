<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Acara;

class AcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acara::factory(50)->create();
    }
}
