<?php

namespace Database\Factories;

use App\Models\Snack;
use Illuminate\Database\Eloquent\Factories\Factory;

class SnackSaleFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        $snack = Snack::all()->random();

        return [
            "snack"    => $snack->name,
            "price"    => $snack->price,
            "quantity" => rand(1, 3),
        ];
    }
}
