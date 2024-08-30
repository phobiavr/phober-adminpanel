<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;
use Shared\Traits\Authorable;

/**
 * @property int $id
 * @property int $device_id
 * @property-read  bool $active
 * @property-read string $label
 * @property-read Device $device
 */
class DeviceInstance extends Model {
    use Authorable, HasFactory;

    //TODO:: add serial number

    protected static $authorableType = "device-instance";
    protected $connection = "db_device";
    protected $casts = [
        'active'             => 'boolean',
        'deactivation_start' => 'datetime',
        'deactivation_end'   => 'datetime',
    ];
    protected $fillable = ["device_id"];

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
        $deviceName = $this->device->name;

        $position = DeviceInstance::where('device_id', $this->device_id)
            ->where('id', '<=', $this->id)
            ->count();

        return "{$deviceName} - {$position}";
    }
}
