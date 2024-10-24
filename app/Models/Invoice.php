<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Invoice extends Model {
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
