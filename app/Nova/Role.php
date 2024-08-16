<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Role extends Resource {
    public static string $model = \App\Models\Role::class;
    public static $title = 'name';
    public static $search = ['name'];
    public static $group = "Auth";

    public function fields(Request $request): array {
        return [
            ID::make()->sortable(),

            Text::make('Name', 'name')
                ->rules(['required', 'string', 'max:255'])
                ->creationRules("unique:{$this->getTable()},name")
                ->updateRules("unique:{$this->getTable()},name,{{resourceId}}"),

            PermissionBooleanGroup::make('Permissions', 'permissions'),

            BelongsToMany::make('Users', 'users', User::class),
        ];
    }

}
