<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;
use Phobiavr\PhoberLaravelCommon\Traits\Authorable;

class Customer extends Model {
    use Authorable;

    protected $connection = "db_crm";
    protected $casts = [
        "birthday" => "date",
    ];
    protected $fillable = ['first_name', 'last_name', 'birthday', 'id', "birthday", "gender", "discount", "balance", "note"];

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }

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
