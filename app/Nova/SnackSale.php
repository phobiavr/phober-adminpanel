<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;

class SnackSale extends Resource {
  public static $model = \App\Models\SnackSale::class;
  public static $title = 'id';
  public static $search = ['id'];
  public static $group = "Staff";

  public function fields(Request $request) {
    return [
      ID::make(__('ID'), 'id')->sortable(),

      BelongsTo::make('Snack'),

      Number::make('Quantity'),

      BelongsTo::make('Sold by', 'soldBy', Employee::class),

    ];
  }
}
