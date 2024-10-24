<?php

namespace App\Models;

use App\Models\Traits\SyncRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model {
    use SyncRoles;

    protected $connection = 'db_auth';

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'role_permissions');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }
}
