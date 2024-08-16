<?php

namespace App\Models\Traits;

use App\Models\Role;

trait SyncRoles {
    public function syncRoles($roles): void {
        $roles = Role::query()->whereIn('name', $roles)->get()->pluck('id');

        if ($this->getModel()->exists) {
            $this->roles()->sync($roles);
        } else {
            $model = $this->getModel();
            $class = \get_class($model);

            $class::saved(
                function ($object) use ($roles, $model) {
                    $model->roles()->attach($roles);
                }
            );
        }
    }
}
