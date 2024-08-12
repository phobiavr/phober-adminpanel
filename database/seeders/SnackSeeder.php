<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Seeder;

class SnackSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //TODO:: switch to factory

        Snack::create(['name' => 'Red Bull', 'stock' => rand(0, 15), 'price' => 2.5]);
        Snack::create(['name' => 'Coca-Cola', 'stock' => rand(0, 15), 'price' => 2]);
        Snack::create(['name' => 'Fanta', 'stock' => rand(0, 15), 'price' => 2]);
        Snack::create(['name' => 'Snickers', 'stock' => rand(0, 15), 'price' => 1.5]);
    }
}
