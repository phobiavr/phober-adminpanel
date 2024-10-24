<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;

/**
 * @property int $id
 * @property-read  bool $active
 * @property-read string $label
 * @property-read Device $device
 */
class DeviceInstance extends Model {
    protected $table = 'instances';
    protected $connection = "db_device";
    protected $casts = [
        'active' => 'boolean',
        'deactivation_start' => 'datetime',
        'deactivation_end' => 'datetime',
    ];

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }

    public function schedules(): HasMany {
        return $this->hasMany(DeviceInstanceSchedule::class, 'instance_id');
    }

    public function activeSchedules(): HasMany {
        return $this->schedules()->active();
    }

    public function getActiveAttribute() {
        return !$this->activeSchedules()->exists();
    }

    public function device(): BelongsTo {
        return $this->belongsTo(Device::class);
    }

    public function getLabelAttribute(): string {
        $position = DeviceInstance::where('device', $this->device)
            ->where('id', '<=', $this->id)
            ->count();

        return "{$this->device} - {$position}";
    }
}
