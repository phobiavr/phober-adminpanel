<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

/**
 * @property int $id
 * @property-read string $name
 */
class Device extends Model {
    use HasRelationships, Commentable;

    protected $connection = 'db_device';

    public function setNameAttribute($value): void {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function games(): BelongsToMany {
        return $this->belongsToMany(Game::class, 'game_device', 'device', 'game_id', 'type', 'id');
    }

    public function instances(): HasMany {
        return $this->hasMany(DeviceInstance::class, 'device', 'type');
    }

    public function tariffPlans(): HasMany {
        return $this->hasMany(TariffPlan::class, 'device', 'type');
    }

    public function genres(): HasManyDeep {
        return $this->hasManyDeepFromRelations($this->games(), (new Game())->genres())->distinct();
    }
}
