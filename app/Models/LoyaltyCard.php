<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LoyaltyCard extends Model {
    use HasFactory;

    //https://stackoverflow.com/a/32881563
    public $incrementing = false;
    protected $connection = "db_crm";

    public function customer(): HasOne {
        return $this->hasOne(Customer::class, 'id', 'id');
    }
}
