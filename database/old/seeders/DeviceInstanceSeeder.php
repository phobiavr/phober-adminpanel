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
        DeviceInstance::factory(4)->create(['device' => 'HTC']);
        DeviceInstance::factory(2)->create(['device' => 'OCULUS']);
        DeviceInstance::factory(2)->create(['device' => 'PS_VR']);
        DeviceInstance::factory(4)->create(['device' => 'OMNI']);
        DeviceInstance::factory(4)->create(['device' => 'DOF_3']);
    }
}
