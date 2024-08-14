<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

class Session extends Model {
    use HasFactory;

    protected $connection = "db_staff";

    protected $casts = [
        "start_time" => "datetime",
        "end_time"   => "datetime",
    ];

    protected static function boot(): void {
        parent::boot();

        static::creating(function ($model) {
            $model->updated_time = $model->initial_time;
            $model->updated_price = $model->initial_price;
        });
    }

    public function instance(): BelongsTo {
        return $this->belongsTo(DeviceInstance::class, 'instance_id');
    }

    public function servicedBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'serviced_by');
    }

    public function writtenBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'written_by');
    }
}
