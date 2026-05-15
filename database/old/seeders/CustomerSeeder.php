<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void {
        $customers = Customer::factory(30)->create();

        foreach ($customers as $customer) {
            for ($j = 0; $j < rand(1, 3); $j++) {
                Contact::factory()->create(['customer_id' => $customer->id]);
            }
        }
    }
}
