<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siaran;

class SiaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siaran::create([
            'nama' => 'Pro 1',
            'slug' => 'pro-1',
            'frekuensi' => '97,6'
        ]);

        Siaran::create([
            'nama' => 'Pro 2',
            'slug' => 'pro-2',
            'frekuensi' => '88,5'
        ]);

        Siaran::create([
            'nama' => 'Pro 4',
            'slug' => 'pro-4',
            'frekuensi' => '98,4'
        ]);
    }
}
