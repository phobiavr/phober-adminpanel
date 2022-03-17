<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Device extends Resource {
  public static $model = \App\Models\Device::class;
  public static $title = 'name';
  public static $search = [
    'id', 'name'
  ];

  public function fields(Request $request) {
    return [
      ID::make()->sortable(),

      Text::make("Name")->sortable(),
    ];
  }
}
