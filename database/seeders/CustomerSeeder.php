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
    Customer::factory(30)->create();

    for ($i = 1; $i <= 30; $i++) {
      for ($j = 1; $j <= rand(1,3); $j++){
        Contact::factory()->create(['customer_id' => $i]);
      }
    }
  }
}
