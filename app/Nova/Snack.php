<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class Snack extends Resource {
  public static $model = \App\Models\Snack::class;
  public static $title = 'name';
  public static $search = ['id'];
  public static $group = "Staff";

  public function fields(Request $request) {
    return [
      ID::make(__('ID'), 'id')->sortable(),

      Text::make('Name')->sortable()->rules('required', 'max:255'),

      Number::make('Stock'),

      Number::make('Price')->step(0.01)
    ];
  }
}
