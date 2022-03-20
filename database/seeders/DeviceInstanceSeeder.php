<?php

namespace Database\Seeders;

use DateTime;
use DB;
use Illuminate\Database\Seeder;

class DeviceInstanceSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $now = new DateTime();

    $instances = [
      ['device_id' => 1, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 1, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 1, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 1, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 2, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 2, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 4, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 4, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 4, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 4, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 5, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 5, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 5, 'updated_at' => $now, 'created_at' => $now],
      ['device_id' => 5, 'updated_at' => $now, 'created_at' => $now],
    ];

    DB::connection('db_device')->table("device_instances")->insert($instances);
  }
}
