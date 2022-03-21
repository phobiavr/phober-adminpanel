<?php

namespace Database\Factories;

use App\Models\DeviceInstance;
use App\Models\Employee;
use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition(): array {
    return [
      "instance_id" => DeviceInstance::all()->pluck('id')->random(),
      "tariff" => Session::tariffEnum()->random(),
      "tariff_changed" => rand(0, 5) === 3,
      "staff_id" => Employee::all()->pluck('id')->random(),
      "status" => Session::statusEnum()->random(),

      "initial_time" => 15,
      "initial_price" => 15,

      "start_time" => $this->faker->dateTimeBetween('-1 hours', ''),
      "end_time" => $this->faker->dateTimeBetween('-1 hours', '+2 hours'),

      "note" => rand(1, 10) == 1 ? $this->faker->text() : '',
      "written_by" => Employee::all()->pluck('id')->random(),
    ];
  }
}
