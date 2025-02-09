<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Phobiavr\PhoberLaravelCommon\Enums\CustomerStatusEnum;

class CustomerFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name'  => $this->faker->lastName(),
            'birthday'   => $this->faker->date(),
            'gender'     => rand(0, 1) === 0 ? 'M' : 'F',
            'discount'   => rand(0, 10) == 5 ? rand(0, 50) : 0,
            'note'       => rand(1, 4) == 2 ? $this->faker->text() : '',
            'balance'    => rand(0, 100),
            'status'     => array_column(CustomerStatusEnum::cases(), 'value')[rand(0, count(CustomerStatusEnum::cases()) - 1)]
        ];
    }
}
