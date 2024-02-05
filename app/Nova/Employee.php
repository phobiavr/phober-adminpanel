<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Employee extends Resource {
  public static $model = \App\Models\Employee::class;
  public static $search = ['first_name', 'last_name'];
  public static $group = "Staff";

  public function title(): string {
    return $this->first_name . ' ' . $this->last_name;
  }

  public function fields(Request $request) {
    return [
      ID::make(__('ID'), 'id')->sortable(),

      Text::make('First name')
        ->sortable()
        ->rules('required', 'max:255'),

      Text::make('Last name')
        ->sortable()
        ->rules('required', 'max:255'),
    ];
  }
}
