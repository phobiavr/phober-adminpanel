<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Game extends Model implements HasMedia {
    use HasRelationships, HasTranslations, InteractsWithMedia, Commentable;

    public array $translatable = ['description'];
    protected $connection = 'db_device';
    protected $casts = ["multiplayer" => "boolean"];

    public function setNameAttribute($value): void {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('preview')->useDisk('media');
    }

    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class, 'game_genre', 'game_id', 'genre_id');
    }

    public function devices(): BelongsToMany {
        return $this->belongsToMany(Device::class, 'game_device', 'game_id', 'device', 'id', 'type');
    }

    public function deviceInstances(): HasManyDeep {
        return $this->hasManyDeepFromRelations($this->devices(), (new Device())->instances())->distinct();
    }
}
