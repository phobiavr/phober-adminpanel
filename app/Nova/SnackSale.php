<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class SnackSale extends Resource {
    public static $model = \App\Models\SnackSale::class;
    public static $title = 'id';
    public static $globallySearchable = false;
    public static $group = "Staff";

    public function fields(Request $request) {
        return [
            BelongsTo::make('Invoice', 'invoice', Invoice::class),

            Text::make('Snack'),

            Number::make('Price')->displayUsing(fn($value) => $value . ' AZN'),
            Number::make('Quantity'),
            Number::make('Total')->displayUsing(fn($value) => $value . ' AZN'),

            DateTime::make('Created at')->sortable(),

            MorphOne::make('Author')->onlyOnDetail(),
        ];
    }
}
