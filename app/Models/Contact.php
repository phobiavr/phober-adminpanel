<?php

namespace App\Models;

use App\Commentable;
use App\Revisionable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contact extends Model {
    use Revisionable, Commentable;

    protected $connection = "db_crm";
    protected $fillable = ['value', 'type'];
    protected $hidden = ['customer_id'];

    public function customer(): HasOne {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }
}
