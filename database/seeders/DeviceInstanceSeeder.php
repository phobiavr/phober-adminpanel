<?php

namespace Database\Seeders;

use App\Models\DeviceInstance;
use Illuminate\Database\Seeder;

class DeviceInstanceSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DeviceInstance::factory(4)->create(['device_id' => 1]);
        DeviceInstance::factory(2)->create(['device_id' => 2]);
        DeviceInstance::factory(2)->create(['device_id' => 3]);
        DeviceInstance::factory(4)->create(['device_id' => 4]);
        DeviceInstance::factory(4)->create(['device_id' => 5]);
    }
}
