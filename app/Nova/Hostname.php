<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Hostname extends Resource {
    public static $model = \App\Models\Hostname::class;
    public static $title = 'container';
    public static $search = ['hostname', 'container'];
    public static $group = "AdminPanel";

    public function fields(Request $request) {
        return [
            ID::make()->sortable(),

            Text::make("Container")->sortable(),

            Text::make("Hostname")->sortable(),

            DateTime::make('Created at')->sortable()->exceptOnForms(),
            DateTime::make('Updated at')->onlyOnDetail(),
        ];
    }
}
