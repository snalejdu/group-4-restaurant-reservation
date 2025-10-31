<?php

use Illuminate\Database\Seeder;
use App\Models\Table;
use App\Models\Customer;
use App\Models\Reservation;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $tables = Table::factory(10)->create();
        $customers = Customer::factory(20)->create();

        foreach (range(1, 20) as $i) {
            Reservation::factory()->create([
                'table_id' => $tables->random()->id,
                'customer_id' => $customers->random()->id,
            ]);
        }
    }
}
