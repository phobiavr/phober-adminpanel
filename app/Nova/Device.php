<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Media;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Device extends Resource {
    public static $model = \App\Models\Device::class;
    public static $title = 'name';
    public static $search = ['slug', 'name', 'type'];
    public static $group = "Device";

    public function fields(Request $request): array {
        return [
            ID::make()->sortable(),

            Media::make('Logo', 'logo'),

            Text::make("Name")->sortable(),

            Text::make("Type")->sortable()->hideWhenCreating()->hideWhenUpdating(),

            HasMany::make('Tariff Plans', 'tariffPlans'),

            HasMany::make('Device Instances', 'instances'),

            HasMany::make('Games'),

            HasMany::make('Genres'),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }
}
