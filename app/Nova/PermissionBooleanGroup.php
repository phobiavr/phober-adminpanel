<?php

namespace App\Nova;

use Illuminate\Support\Collection;
use Laravel\Nova\Fields\BooleanGroup;
use Laravel\Nova\Http\Requests\NovaRequest;

class PermissionBooleanGroup extends BooleanGroup {
    public function __construct($name, $attribute = null, callable $resolveCallback = null, $labelAttribute = null) {
        parent::__construct(
            $name,
            $attribute,
            $resolveCallback ?? static function (Collection $permissions) {
            return $permissions->mapWithKeys(function (\App\Models\Permission $permission) {
                return [$permission->name => true];
            });
        }
        );

        $options = \App\Models\Permission::get()->pluck($labelAttribute ?? 'name', 'name')->toArray();

        $this->options($options);
    }

    /**
     * @param NovaRequest $request
     * @param string $requestAttribute
     * @param \App\Models\Role $model
     * @param string $attribute
     */
    protected function fillAttributeFromRequest(NovaRequest $request, $requestAttribute, $model, $attribute): void {
        if (!$request->exists($requestAttribute)) {
            return;
        }

        $values = collect(json_decode($request[$requestAttribute], true))
            ->filter(static function (bool $value) {
                return $value;
            })
            ->keys()
            ->toArray();

        $model->syncPermissions($values);
    }
}
