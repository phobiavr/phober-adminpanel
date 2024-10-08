<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;
use KirschbaumDevelopment\NovaComments\Models\Comment;
use Phobiavr\PhoberLaravelCommon\Traits\Authorable;

class Genre extends Model {
    use HasFactory, Authorable;

    protected static $authorableType = "device-genre";
    protected $connection = 'db_device';

    public function setNameAttribute($value): void {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }

    public function games(): BelongsToMany {
        return $this
            ->belongsToMany(Game::class, "game_genre");
    }
}
