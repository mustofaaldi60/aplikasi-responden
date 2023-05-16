<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ChatSeeder;
use Database\Seeders\LaguSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AcaraSeeder;
use Database\Seeders\SiaranSeeder;
use Database\Seeders\RespondenSeeder;
use Database\Seeders\RequestLaguSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            SiaranSeeder::class,
            LaguSeeder::class,
            RequestLaguSeeder::class,
            RespondenSeeder::class,
            AcaraSeeder::class,
            ChatSeeder::class,
        ]);
    }
}
