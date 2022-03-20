<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Genre extends Resource {
  /**
   * The model the resource corresponds to.
   *
   * @var string
   */
  public static $model = \App\Models\Genre::class;
  /**
   * The single value that should be used to represent the resource when being displayed.
   *
   * @var string
   */
  public static $title = 'id';
  /**
   * The columns that should be searched.
   *
   * @var array
   */
  public static $search = [
    'id',
  ];

  /**
   * Get the fields displayed by the resource.
   *
   * @param Request $request
   * @return array
   */
  public function fields(Request $request): array {
    return [
      ID::make()->sortable(),

      Text::make("Name"),

      BelongsToMany::make("Games")
    ];
  }
}
