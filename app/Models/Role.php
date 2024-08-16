<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model {
    protected $connection = 'db_auth';

    public function permissions(): BelongsToMany {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'user_roles');
    }

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
