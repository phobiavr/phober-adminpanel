<?php

namespace App\Nova;

use Illuminate\Http\Request;
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

            Text::make("Name")->sortable(),

            Text::make("Type")->sortable()->hideWhenCreating()->hideWhenUpdating(),

            HasMany::make('Tariff Plans', 'tariffPlans'),

            HasMany::make('Device Instances', 'instances'),

            HasMany::make('Games'),

            HasMany::make('Genres'),
        ];
    }
}
