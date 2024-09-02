<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Shared\Enums\InvoicePaymentMethodEnum;
use Shared\Enums\InvoiceStatusEnum;

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
            Enum::make('Payment method')->attach(InvoicePaymentMethodEnum::class)->sortable(),

            Number::make('Total')->displayUsing(fn($value) => $value . ' AZN'),

            HasMany::make('Sessions'),
            HasMany::make('Snack Sales', 'snackSales'),
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('Status', InvoiceStatusEnum::class),
            EnumFilter::make('Payment method', InvoicePaymentMethodEnum::class),
        ];
    }
}
