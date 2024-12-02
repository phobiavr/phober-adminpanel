<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Phobiavr\PhoberLaravelCommon\Enums\ScheduleEnum;

/**
 * @property \DateTime $start
 * @property \DateTime $end
 */
class DeviceInstanceSchedule extends Model {
    use Commentable;

    protected $table = 'schedules';
    protected $connection = "db_device";
    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    public function instance(): BelongsTo {
        return $this->belongsTo(DeviceInstance::class);
    }

    public function scopeActive($query) {
        $now = now()->format('Y-m-d H:i:s');

        return $query->where('type', '<>', ScheduleEnum::CANCELED->value)->where(function ($query) use ($now) {
            $query->where(function ($query) {
                $query->whereNull('start')
                    ->whereNull('end');
            })->orWhere(function ($query) use ($now) {
                $query->whereNull('start')
                    ->where('end', '>', $now);
            })->orWhere(function ($query) use ($now) {
                $query->where('start', '<', $now)
                    ->whereNull('end');
            })->orWhere(function ($query) use ($now) {
                $query->where('start', '<', $now)
                    ->where('end', '>', $now);
            });
        });
    }

    public function getIsActiveAttribute(): bool {
        $now = now()->format('Y-m-d H:i:s');

        return ($this->type !== ScheduleEnum::CANCELED->value) && (
                ($this->start === null && $this->end === null) ||
                ($this->start === null && $this->end > $now) ||
                ($this->start < $now && $this->end === null) ||
                ($this->start < $now && $this->end > $now)
            );
    }
}
