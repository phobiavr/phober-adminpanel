<?php

namespace App\Models\Traits;

use App\Models\Permission;

trait SyncPermissions {
    public function syncPermissions(array $permissions): void {
        $permissions = Permission::query()->whereIn('name', $permissions)->get()->pluck('id');

        if ($this->getModel()->exists) {
            $this->permissions()->sync($permissions);
        } else {
            $model = $this->getModel();
            $class = \get_class($model);

            $class::saved(
                function ($object) use ($permissions, $model) {
                    $model->permissions()->attach($permissions);
                }
            );
        }
    }
}
