<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Shared\Traits\Authorable;

class SnackSale extends Model {
    use HasFactory, Authorable;

    protected static $authorableType = "staff-snack-sale";
    protected $connection = "db_staff";

    public function snack(): BelongsTo {
        return $this->belongsTo(Snack::class);
    }

    public function invoice(): BelongsTo {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function getPriceAttribute() {
        return $this->snack->price * $this->quantity;
    }
}
