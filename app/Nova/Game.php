<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Media;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Game extends Resource {
  public static $model = \App\Models\Game::class;
  public static $title = 'name';
  public static $search = ['id', 'name', 'slug', 'description'];
  public static $group = "Device";

  public function fields(Request $request) {
    return [
      ID::make()->sortable(),

      Media::make('Preview', 'preview'),

      Text::make("Name")->sortable(),

      Text::make("Slug")->sortable()->hideWhenCreating()->hideWhenUpdating(),

      BelongsToMany::make("Genres"),

      Boolean::make("Multiplayer"),

      BelongsToMany::make("Devices"),

      HasMany::make('Device Instances', 'deviceInstances'),

      HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
      new Commenter(),
    ];
  }
}
