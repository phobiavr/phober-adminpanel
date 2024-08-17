<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;

class Config extends Resource {
    public static $model = \App\Models\Config::class;
    public static $search = ['key', 'value'];
    public static $group = "AdminPanel";
    public static $title = 'key';

    public static $tableStyle = 'tight';

    public function fields(Request $request): array {
        return [
            Text::make('Key')->sortable(),

            Text::make('Value')->sortable(),

            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),

            MorphOne::make('Author'),

            MorphMany::make('Revisions'),

            new Commenter(),
        ];
    }
}
