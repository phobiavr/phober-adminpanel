<?php

namespace Database\Factories;

use App\Enums\ContactTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        $type = [ContactTypeEnum::TELEGRAM, ContactTypeEnum::EMAIL, ContactTypeEnum::PHONE][rand(0, 2)];

        return [
            'value' => match ($type) {
                ContactTypeEnum::EMAIL => $this->faker->email(),
                ContactTypeEnum::PHONE => $this->faker->e164PhoneNumber(),
                ContactTypeEnum::TELEGRAM => $this->faker->userName(),
            },
            'type'  => $type->value,
        ];
    }
}
