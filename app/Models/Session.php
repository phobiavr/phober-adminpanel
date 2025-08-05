<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Phobiavr\PhoberLaravelCommon\Traits\Authorable;

class Session extends Model {
    use Authorable, Commentable;

    protected $connection = "db_staff";
    protected $table = 'game_sessions';

    public function instance(): BelongsTo {
        return $this->belongsTo(DeviceInstance::class, 'instance_id');
    }

    public function invoice(): BelongsTo {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function servicedBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'serviced_by');
    }

    public function getEndPriceAttribute() {
        return $this->price - ($this->discount * 0.1);
    }
}
