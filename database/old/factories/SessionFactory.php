<?php

namespace Database\Factories;

use App\Models\DeviceInstance;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Phobiavr\PhoberLaravelCommon\Enums\SessionStatusEnum;

class SessionFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        return [
            "instance_id" => DeviceInstance::all()->pluck('id')->random(),
            "serviced_by" => Employee::all()->pluck('id')->random(),
            "status"      => $this->faker->randomElement(SessionStatusEnum::cases())->value,

            "time"  => 15,
            "price" => 15,

            "note" => rand(1, 10) == 1 ? $this->faker->text() : '',
        ];
    }
}
