<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;

class Author extends Resource {
    public static $model = \Phobiavr\PhoberLaravelCommon\Author::class;
    public static $title = 'id';
    public static $globallySearchable = false;

    public static $displayInNavigation = false;

    public function authorizedToUpdate($request) {
        return false;
    }

    public function authorizedToDelete($request) {
        return false;
    }

    public function authorizedToReplicate(Request $request)
    {
        return false;
    }

    public function fields(Request $request) {
        return [
            BelongsTo::make('Created by', 'createdBy', User::class),

            DateTime::make('Created At', 'authorable_created_at'),

            BelongsTo::make('Updated by', 'updatedBy', User::class),

            DateTime::make('Updated At', 'authorable_updated_at'),
        ];
    }
}
