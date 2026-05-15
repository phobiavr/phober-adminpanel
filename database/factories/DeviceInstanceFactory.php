<?php

namespace database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceInstanceFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            "mac_address" => $this->faker->macAddress
        ];
    }
}
