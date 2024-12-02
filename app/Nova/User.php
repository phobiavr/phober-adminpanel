<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource {
    public static string $model = \App\Models\User::class;
    public static $title = 'username';
    public static $search = ['first_name', 'last_name', 'username', 'email'];
    public static $group = "Auth";

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest|Request $request) {
        return [
            ID::make()->sortable(),

            Gravatar::make()->maxWidth(50),

            Text::make('Username')
                ->sortable()
                ->rules('required', 'max:255')
                ->creationRules("unique:{$this->getTable()},username")
                ->updateRules("unique:{$this->getTable()},username,{{resourceId}}"),

            Text::make('First name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Last name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules("unique:{$this->getTable()},email")
                ->updateRules("unique:{$this->getTable()},email,{{resourceId}}"),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', Rules\Password::defaults())
                ->updateRules('nullable', Rules\Password::defaults()),

            MorphMany::make('Revisions')->onlyOnDetail(),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }
}
