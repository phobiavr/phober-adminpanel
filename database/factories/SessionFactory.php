<?php

namespace Database\Factories;

use App\Enums\SessionStatusEnum;
use App\Enums\SessionTariffEnum;
use App\Models\DeviceInstance;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        $startTime = $this->faker->dateTimeBetween('-1 hours', '');

        return [
            "instance_id"    => DeviceInstance::all()->pluck('id')->random(),
            "tariff"         => $this->faker->randomElement(SessionTariffEnum::cases())->value,
            "tariff_changed" => rand(0, 5) === 3,
            "serviced_by"    => Employee::all()->pluck('id')->random(),
            "status"         => $this->faker->randomElement(SessionStatusEnum::cases())->value,

            "initial_time"  => 15,
            "initial_price" => 15,

            "start_time" => $startTime,
            "end_time"   => $this->faker->dateTimeBetween($startTime, '+2 hours'),

            "note"       => rand(1, 10) == 1 ? $this->faker->text() : '',
            "written_by" => Employee::all()->pluck('id')->random(),
        ];
    }
}
