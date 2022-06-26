<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarFactory extends Factory
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
            'waldo' => rand(1,50),
            'grault'=> rand(1,50)
        ];
    }
}
