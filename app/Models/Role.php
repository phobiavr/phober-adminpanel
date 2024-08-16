<?php

namespace App\Models;

use App\Models\Traits\SyncPermissions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model {
    use SyncPermissions;

    protected $connection = 'db_auth';

    public function permissions(): BelongsToMany {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}
