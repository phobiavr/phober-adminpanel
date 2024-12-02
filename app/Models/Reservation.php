<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model {
    use Commentable;

    protected $connection = "db_staff";

    protected $casts = [
        'date' => 'datetime',
    ];

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }
}
