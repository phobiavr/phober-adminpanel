<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Phobiavr\PhoberLaravelCommon\Traits\Authorable;

class SnackSale extends Model {
    use Authorable, Commentable;

    protected $connection = "db_staff";

    public function invoice(): BelongsTo {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function getTotalAttribute() {
        return $this->price * $this->quantity;
    }
}
