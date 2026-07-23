<?php

namespace App\Models;

use App\Commentable;
use App\Models\Traits\SyncPermissions;
use App\Models\Traits\SyncRoles;
use App\Revisionable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use Notifiable, SyncRoles, SyncPermissions, Commentable, Revisionable;

    protected $connection = 'db_auth';

    protected $appends = ['name'];

    private ?array $permissionNames = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'api_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function permissions(): BelongsToMany {
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
    
    public function getNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function hasPermission(string $permission): bool {
        return in_array($permission, $this->permissionNames(), true);
    }

    private function permissionNames(): array {
        return $this->permissionNames ??= $this->permissions()->pluck('name')
            ->merge(Permission::query()->whereHas('roles.users', fn ($query) => $query->whereKey($this->id))->pluck('name'))
            ->unique()
            ->values()
            ->all();
    }
}
