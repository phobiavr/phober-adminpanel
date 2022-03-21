<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;

class Invoice extends Resource {
  public static $model = \App\Models\Invoice::class;
  public static $title = 'id';
  public static $search = ['id'];
  public static $group = 'Staff';

  public function fields(Request $request) {
    return [
      ID::make(__('ID'), 'id')->sortable(),

      BelongsTo::make('Customer', 'customer', Customer::class),

      Select::make('Status')->options(\App\Models\Invoice::statusEnum()->mapWithKeys(function ($item) {return [$item => $item];})),

      Select::make('Payment method')->options(\App\Models\Invoice::paymentMethodEnum()->mapWithKeys(function ($item) {return [$item => $item];})),

      Number::make('Discount'),

      HasMany::make('Sessions'),
      HasMany::make('SnackSales'),
    ];
  }
}
