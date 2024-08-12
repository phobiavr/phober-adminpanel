<?php

namespace App\Models;

use App\Traits\Authorable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;
use KirschbaumDevelopment\NovaComments\Models\Comment;
use Spatie\Translatable\HasTranslations;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Game extends ModelInteractsWithMedia {
    use HasFactory, HasRelationships, Authorable, HasTranslations;

    public array $translatable = ['description'];
    protected $connection = 'db_device';
    protected $casts = ["multiplayer" => "boolean"];
    protected string $app = "device-service";

    public function setNameAttribute($value): void {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }

    public function registerMediaCollections(): void {
        $this
            ->addMediaCollection('preview')
            ->useDisk('media');
    }

    public function genres(): BelongsToMany {
        return $this
            ->belongsToMany(Genre::class, 'game_genre');
    }

    public function devices(): BelongsToMany {
        return $this
            ->belongsToMany(Device::class, 'game_device');
    }

    public function deviceInstances(): HasManyDeep {
        return $this
            ->hasManyDeep(DeviceInstance::class, ['game_device', Device::class]);
    }
}
