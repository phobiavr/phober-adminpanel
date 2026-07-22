<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Phobiavr\PhoberLaravelCommon\Enums\ScheduleEnum;

/**
 * @property int $id
 * @property-read  bool $active
 * @property-read string $label
 * @property-read Device $device
 */
class DeviceInstance extends Model {
    use Commentable;

    /** Mirrors NotifyUpcomingSchedules::WINDOW_MINUTES in device-service. */
    public const UPCOMING_WINDOW_MINUTES = 15;

    protected $table = 'instances';
    protected $connection = "db_device";
    protected $casts = [
        'active' => 'boolean',
        'deactivation_start' => 'datetime',
        'deactivation_end' => 'datetime',
    ];

    public function schedules(): HasMany {
        return $this->hasMany(DeviceInstanceSchedule::class, 'instance_id');
    }

    public function activeSchedules(): HasMany {
        return $this->schedules()->active();
    }

    public function getActiveAttribute() {
        return !$this->activeSchedules()->exists();
    }

    public function getActiveSchedule() {
        return $this->schedules->filter(function ($schedule) {
            return $schedule->isActive();
        })->sortBy('end')->first();
    }

    public function getUpcomingSchedule() {
        $window = now()->addMinutes(self::UPCOMING_WINDOW_MINUTES);

        return $this->schedules
            ->filter(fn($schedule) =>
                $schedule->type !== ScheduleEnum::CANCELED->value &&
                $schedule->start !== null &&
                $schedule->start > now() &&
                $schedule->start <= $window
            )
            ->sortBy('start')
            ->first();
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
