<?php

namespace App\Models;

use App\Traits\Revisionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;

class Contact extends Model {
    use HasFactory, Revisionable;

    protected $connection = "db_crm";
    protected $fillable = ['value', 'type'];

    public function customer(): HasOne {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }
}
