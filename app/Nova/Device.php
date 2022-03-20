<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Device extends Resource {
  public static $model = \App\Models\Device::class;
  public static $title = 'name';
  public static $search = [
    'id', 'name'
  ];

  public function fields(Request $request): array {
    return [
      ID::make()->sortable(),

      Text::make("Name")->sortable(),

      Text::make("Slug")->sortable()->hideWhenCreating()->hideWhenUpdating(),

      HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
      new Commenter(),
    ];
  }
}
