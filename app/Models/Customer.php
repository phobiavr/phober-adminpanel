<?php

namespace App\Models;

use App\Commentable;
use App\Revisionable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Phobiavr\PhoberLaravelCommon\Traits\Authorable;

class Customer extends Model {
    use Authorable, Revisionable, Commentable;

    protected $connection = "db_crm";
    protected $casts = [
        "birthday" => "date",
    ];
    protected $fillable = ['first_name', 'last_name', 'birthday', 'id', "birthday", "gender", "discount", "balance", "note"];

    public function loyaltyCard(): HasOne {
        return $this->hasOne(LoyaltyCard::class, 'id', 'id');
    }

    public function contacts(): HasMany {
        return $this->hasMany(Contact::class, 'customer_id', 'id');
    }

    public function invoices(): HasMany {
        return $this->hasMany(Invoice::class);
    }
}
