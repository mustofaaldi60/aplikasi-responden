<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RespondenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'acara_id' => mt_rand(1, 50),
            'jadwal' => $this->faker->dateTimeBetween('-2 years', '2 years'),
            'pendengar' => $this->faker->firstNameMale(),
            'usia' => mt_rand(17, 65),
            'kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'telepon' => $this->faker->numerify('0822-####-####'),
            'respon_pendengar' => $this->faker->sentences('5', true),
            'rating' => mt_rand(1, 5),
        ];
    }
}