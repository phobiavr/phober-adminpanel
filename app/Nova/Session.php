<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;

class Session extends Resource {
    public static $model = \App\Models\Session::class;
    public static $title = 'id';
    public static $globallySearchable = false;
    public static $group = "Staff";

    public function fields(Request $request) {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            BelongsTo::make('Device', 'instance', DeviceInstance::class),

            BelongsTo::make('Serviced by', 'servicedBy', Employee::class),

            Number::make('Initial time'),
            Number::make('Updated time')->hideWhenCreating()->hideFromIndex(),

            Number::make('Initial price'),
            Number::make('Updated price')->hideWhenCreating()->hideFromIndex(),

            Select::make('Tariff')->options(\App\Models\Session::tariffEnum()->mapWithKeys(function ($item) {
                return [$item => $item];
            })),

            Select::make('Status')->options(\App\Models\Session::statusEnum()->mapWithKeys(function ($item) {
                return [$item => $item];
            })),

            DateTime::make('Start time')->format('YYYY-MM-DD HH:mm:ss'),
            DateTime::make('End time')->format('YYYY-MM-DD HH:mm:ss'),

            BelongsTo::make('Written by', 'writtenBy', Employee::class),
        ];
    }
}
