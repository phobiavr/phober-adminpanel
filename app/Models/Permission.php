<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model {
    protected $connection = 'db_auth';

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'role_permissions');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }

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
