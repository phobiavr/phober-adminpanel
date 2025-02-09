<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Session;
use App\Models\SnackSale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Phobiavr\PhoberLaravelCommon\Enums\InvoicePaymentMethodEnum;
use Phobiavr\PhoberLaravelCommon\Enums\InvoiceStatusEnum;

class InvoiceFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        return [
            'customer_id'    => (rand(1, 3) === 2) ? null : Customer::all()->pluck('id')->random(),
            'status'         => $this->faker->randomElement(InvoiceStatusEnum::cases())->value,
            'payment_method' => $this->faker->randomElement(InvoicePaymentMethodEnum::cases())->value,
            //'discount'       => rand(0, 5) !== 3 ? 0 : rand(1, 7) * 10,
        ];
    }

    public function configure(): InvoiceFactory {
        return $this->afterCreating(function (Invoice $invoice) {
            $invoice->sessions()->createMany(Session::factory(rand(1, 3))->make()->toArray());
            $invoice->snackSales()->createMany(SnackSale::factory(rand(1, 3))->make()->toArray());
        });
    }
}
