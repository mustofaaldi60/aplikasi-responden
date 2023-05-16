<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->randomElement(['Obrolan Komunitas', 'Siaran Langsung di Sekolah', 'Orolan Malam Ini', 'Halo Kaltim']),
            'slug' => $this->faker->slug(),
            'jenis' => $this->faker->randomElement(['Generasi Emas', 'Millenial', 'Event Thunan RRI']),
            'siaran_id' => mt_rand(1, 3),
            'penyiar' => $this->faker->randomElement(['Ratih Irawan', 'Ira Ayuandari', 'Sulis']),
            'hari' => $this->faker->date(),
            'jam' => $this->faker->time(),
        ];
    }
}
