<?php

namespace App\Models;

use App\Traits\Authorable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LoyaltyCard extends Model {
  use HasFactory, Authorable;

  protected $connection = "db_crm";
  public $incrementing = false; //https://stackoverflow.com/a/32881563

  public function customer(): HasOne {
    return $this->hasOne(Customer::class, 'id', 'id');
  }
}
