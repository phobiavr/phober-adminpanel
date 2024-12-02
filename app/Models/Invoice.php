<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model {
    use Commentable;

    protected $with = ['sessions', 'snackSales', 'customer'];
    protected $connection = "db_staff";

    public function sessions(): HasMany {
        return $this->hasMany(Session::class);
    }

    public function snackSales(): HasMany {
        return $this->hasMany(SnackSale::class);
    }

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    public function getTotalAttribute() {
        return $this->snackSales->sum('price') + $this->sessions->sum('end_price');
    }
}
