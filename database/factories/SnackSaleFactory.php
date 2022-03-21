<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Snack;
use Illuminate\Database\Eloquent\Factories\Factory;

class SnackSaleFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition(): array {
    return [
      "snack_id" => Snack::all()->pluck('id')->random(),
      "quantity" => rand(1, 3),
      "sold_by" => Employee::all()->pluck('id')->random(),
    ];
  }
}
