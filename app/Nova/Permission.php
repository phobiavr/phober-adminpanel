<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Permission extends Resource {
    public static $model = \App\Models\Permission::class;
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

            RoleBooleanGroup::make('Roles', 'roles'),

            BelongsToMany::make('Users', 'users', User::class),
        ];
    }
}
