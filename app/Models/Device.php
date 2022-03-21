<?php

namespace App\Models;

use App\Traits\Authorable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;
use KirschbaumDevelopment\NovaComments\Models\Comment;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Device extends Model {
  use HasFactory, HasRelationships, Authorable;

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
      ->belongsToMany(Game::class, "game_device");
  }

  public function instances(): HasMany {
    return $this
      ->hasMany(DeviceInstance::class);
  }

  // https://github.com/staudenmeir/eloquent-has-many-deep
  public function genres(): HasManyDeep {
    return $this
      ->hasManyDeep(Genre::class, ["game_device", Game::class, "game_genre"])
      ->distinct();
  }
}
