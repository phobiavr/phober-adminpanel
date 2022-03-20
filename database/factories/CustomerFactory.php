<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition() {
    return [
      'first_name' => $this->faker->firstName(),
      'last_name' => $this->faker->lastName(),
      'birthday' => $this->faker->date(),
      'gender' => rand(0, 1) === 0 ? 'M' : 'F',
      'discount' => rand(0, 10) == 5 ? rand(0, 50) : 0,
      'balance' => rand(0, 100),
    ];
  }
}
