<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Table;
use App\Models\Customer;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'table_id' => Table::inRandomOrder()->first()?->id ?? Table::factory(),
            'customer_id' => Customer::inRandomOrder()->first()?->id ?? Customer::factory(),
            'date_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            'notes' => $this->faker->sentence(),
        ];
    }
}
