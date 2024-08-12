<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SnackSale extends Model {
    use HasFactory;

    protected $connection = "db_staff";

    public function snack(): BelongsTo {
        return $this->belongsTo(Snack::class);
    }

    public function soldBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'sold_by');
    }

    public function invoice(): BelongsTo {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
}
