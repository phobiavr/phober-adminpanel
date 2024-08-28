<?php

namespace App\Models;

use App\Models\Traits\SyncPermissions;
use App\Models\Traits\SyncRoles;
use App\Traits\Revisionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use KirschbaumDevelopment\NovaComments\Commentable;
use KirschbaumDevelopment\NovaComments\Models\Comment;
use Laravel\Sanctum\HasApiTokens;
use Shared\Traits\Authorable;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable, Commentable, Revisionable, Authorable, SyncRoles, SyncPermissions;

    protected $connection = "db_auth";

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
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }

    public function permissions(): BelongsToMany {
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }
    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
}
