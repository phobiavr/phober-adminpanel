<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            ['id' => '1', 'first_name' => 'Flavio', 'last_name' => 'Rempel', 'created_at' => '2025-07-16 23:49:58.0', 'updated_at' => '2025-07-16 23:49:58.0'],
            ['id' => '2', 'first_name' => 'Lowell', 'last_name' => 'D\'Amore', 'created_at' => '2025-07-16 23:49:59.0', 'updated_at' => '2025-07-16 23:49:59.0'],
            ['id' => '3', 'first_name' => 'Amira', 'last_name' => 'Fadel', 'created_at' => '2025-07-16 23:49:59.0', 'updated_at' => '2025-07-16 23:49:59.0'],
            ['id' => '4', 'first_name' => 'Anna', 'last_name' => 'Barton', 'created_at' => '2025-07-16 23:49:59.0', 'updated_at' => '2025-07-16 23:49:59.0'],
            ['id' => '5', 'first_name' => 'Cathy', 'last_name' => 'Yost', 'created_at' => '2025-07-16 23:49:59.0', 'updated_at' => '2025-07-16 23:49:59.0'],
        ];

        DB::connection('db_staff')->table("employees")->insert($employees);
    }
}
