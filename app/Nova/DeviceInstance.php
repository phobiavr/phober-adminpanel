<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class DeviceInstance extends Resource {
  public static $model = \App\Models\DeviceInstance::class;
  public static $title = 'device.name';
  public static $search = ['mac_address'];
  public static $group = "Device";

  public function fields(Request $request): array {
    return [
      ID::make()->sortable(),

      Text::make('Mac Address', 'mac_address'),

      BelongsTo::make("Device"),

      Boolean::make("Active"),

      Boolean::make("Currently Active", 'currently_active')->hideWhenUpdating()->hideWhenCreating(),

      DateTime::make("Deactivation start", "deactivation_start")
        ->nullable(),

      DateTime::make("Deactivation end", "deactivation_end")
        ->nullable(),

      HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
      new Commenter(),
    ];
  }
}
