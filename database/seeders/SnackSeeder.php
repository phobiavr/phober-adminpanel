<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnackSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $snacks = [
            ['id' => '1', 'name' => 'Red Bull', 'stock' => '10', 'price' => '2.5', 'created_at' => '2025-07-16 23:50:00.0', 'updated_at' => '2025-07-16 23:50:00.0'],
            ['id' => '2', 'name' => 'Coca-Cola', 'stock' => '15', 'price' => '2.0', 'created_at' => '2025-07-16 23:50:00.0', 'updated_at' => '2025-07-16 23:50:00.0'],
            ['id' => '3', 'name' => 'Fanta', 'stock' => '13', 'price' => '2.0', 'created_at' => '2025-07-16 23:50:00.0', 'updated_at' => '2025-07-16 23:50:00.0'],
            ['id' => '4', 'name' => 'Snickers', 'stock' => '9', 'price' => '1.5', 'created_at' => '2025-07-16 23:50:00.0', 'updated_at' => '2025-07-16 23:50:00.0'],
        ];

        DB::connection('db_staff')->table("snacks")->insert($snacks);
    }
}
