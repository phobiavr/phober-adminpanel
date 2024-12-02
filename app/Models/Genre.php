<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Phobiavr\PhoberLaravelCommon\Traits\Authorable;

class Genre extends Model {
    use Authorable, Commentable;

    protected $connection = 'db_device';

    public function setNameAttribute($value): void {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function games(): BelongsToMany {
        return $this
            ->belongsToMany(Game::class, "game_genre");
    }
}
