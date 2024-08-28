<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;

class Author extends Resource {
    public static $model = \Shared\Author::class;
    public static $title = 'id';
    public static $globallySearchable = false;

    public static $displayInNavigation = false;

    public function fields(Request $request) {
        return [
            BelongsTo::make('Created by', 'createdBy', User::class),

            BelongsTo::make('Updated by', 'updatedBy', User::class),
        ];
    }
}
