<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->title(),
            'slug' => $this->faker->slug(),
            'frekuensi' => $this->faker->numberBetween(88.5, 98.4)
        ];
    }
}
