<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaguFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Kehilangan', 'Ada apa denganmu', 'Saat Terakhir', 'Jangan Mau Mau', 'Bintang di Surga']),
            'artis' => $this->faker->randomElement(['Kangen Band', 'Peterpan', 'Noah', 'ST12', 'Setia Band']),
            'genre' => $this->faker->randomElement(['Pop', 'Melayu', 'Rock', 'Indie']),
            'album' => $this->faker->randomElement(['Jalan Terbaik', 'Hari yang Cerah', 'Bintang Kehidupan', 'Sings Legend']),
        ];
    }
}
