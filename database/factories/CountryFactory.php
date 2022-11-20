<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country'=> $this->faker->unique()->country(),
            'distance_km'=>$this->faker->numberBetween(1000,5000),
            'status' => '1',
        ];
    }
}
