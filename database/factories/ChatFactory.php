<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'no_hp' => $this->faker->colorName(),
            'message' => $this->faker->sentences()
        ];
    }
}
