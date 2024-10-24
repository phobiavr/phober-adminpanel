<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Phobiavr\PhoberLaravelCommon\Enums\InvoicePaymentMethodEnum;
use Phobiavr\PhoberLaravelCommon\Enums\InvoiceStatusEnum;

class Invoice extends Resource {
    public static $model = \App\Models\Invoice::class;
    public static $title = 'id';
    public static $search = ['id'];
    public static $group = 'Staff';

    public function fields(Request $request) {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            BelongsTo::make('Customer', 'customer', Customer::class),

            Enum::make('Status')->attach(InvoiceStatusEnum::class)->sortable(),

            Text::make('Payment method')
                ->displayUsing(function ($value) {
                    $decoded = json_decode($value, true);
                    $paymentMethods = [];

                    foreach (InvoicePaymentMethodEnum::cases() as $method) {
                        if (isset($decoded[$method->value])) {
                            $paymentMethods[] = "{$method->value}: {$decoded[$method->value]}";
                        }
                    }

                    return implode(', ', $paymentMethods);
                }),

            Number::make('Total')->displayUsing(fn($value) => $value . ' AZN'),

            HasMany::make('Sessions'),
            HasMany::make('Snack Sales', 'snackSales'),
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('Status', InvoiceStatusEnum::class),
        ];
    }
}
