<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contact extends Model {
    protected $connection = "db_crm";
    protected $fillable = ['value', 'type'];

    public function customer(): HasOne {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }
}
