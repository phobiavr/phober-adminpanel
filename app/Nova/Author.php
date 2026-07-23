<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Text;
use Phobiavr\PhoberLaravelCommon\Data\AuthUser;

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
            Text::make('Created by', 'created_by')
                ->resolveUsing(fn(?AuthUser $user) => $user?->username)
                ->exceptOnForms(),

            DateTime::make('Created At', 'authorable_created_at'),

            Text::make('Updated by', 'updated_by')
                ->resolveUsing(fn(?AuthUser $user) => $user?->username)
                ->exceptOnForms(),

            DateTime::make('Updated At', 'authorable_updated_at'),
        ];
    }
}
