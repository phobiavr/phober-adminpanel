<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Shared\Traits\Authorable;

class Reservation extends Model {
    use Authorable;

    protected static $authorableType = "staff-reservation";
    protected $connection = "db_staff";

    protected $casts = [
        'date' => 'datetime',
    ];

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }
}
