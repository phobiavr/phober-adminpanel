<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Invoice extends Model {
    use HasFactory;

    protected $connection = "db_staff";

    public static function statusEnum(): Collection {
        return collect(['QUEUE', 'PAYED', 'CANCELED']);
    }

    public static function paymentMethodEnum(): Collection {
        return collect(['CASH', 'CARD', 'BONUS']);
    }

    public function sessions(): BelongsToMany {
        return $this->belongsToMany(Session::class, 'invoice_session');
    }

    public function snackSales(): HasMany {
        return $this->hasMany(SnackSale::class);
    }

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }
}
