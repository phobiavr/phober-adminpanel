<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;

class Author extends Resource {
  public static $model = \App\Models\Author::class;
  public static $title = 'id';
  public static $globallySearchable = false;

  public static $displayInNavigation = false;

  public function fields(Request $request) {
    return [
      BelongsTo::make('Created by', 'createdBy', User::class),

      BelongsTo::make('Updated by', 'updatedBy', User::class),

      DateTime::make('Created at')->format('YYYY-MM-DD HH:mm:ss'),

      DateTime::make('Updated at')->format('YYYY-MM-DD HH:mm:ss'),
    ];
  }
}
