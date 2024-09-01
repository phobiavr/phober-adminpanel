<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Shared\Traits\Authorable;

class Session extends Model {
    use HasFactory, Authorable;

    protected static $authorableType = "staff-session";
    protected $connection = "db_staff";

    public function instance(): BelongsTo {
        return $this->belongsTo(DeviceInstance::class, 'instance_id');
    }

    public function invoice(): BelongsTo {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function servicedBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'serviced_by');
    }
}
