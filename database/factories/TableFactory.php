<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    public function definition(): array
    {
        return [
            'table_number' => $this->faker->unique()->numberBetween(1, 20),
            'capacity' => $this->faker->numberBetween(2, 10),
        ];
    }
}
