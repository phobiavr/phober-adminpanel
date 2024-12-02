<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Genre extends Resource {
    public static $model = \App\Models\Genre::class;
    public static $title = 'name';
    public static $search = ['name', 'slug'];
    public static $group = "Device";

    public function fields(Request $request): array {
        return [
            ID::make()->sortable(),

            Text::make("Name"),

            Text::make("Slug")->sortable()->hideWhenCreating()->hideWhenUpdating(),

            BelongsToMany::make("Games"),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }
}
