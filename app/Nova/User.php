<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;

class User extends Resource {
    public static string $model = \App\Models\User::class;
    public static $title = 'username';
    public static $search = ['first_name', 'last_name', 'username', 'email'];
    public static $group = "Auth";

    public function fields(Request $request): array {
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
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            MorphMany::make('Revisions'),

            new Commenter(),

            RoleBooleanGroup::make('Roles', 'roles'),
            PermissionBooleanGroup::make('Permissions', 'permissions'),

            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }
}
