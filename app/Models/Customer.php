<?php

namespace App\Models;

use App\Interfaces\HasRevision;
use App\Traits\Revisionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;

class Customer extends Model implements HasRevision {
  use HasFactory, Revisionable;

  protected $connection = "db_crm";
  protected $casts = [
    "birthday" => "date",
  ];

  public function comments(): MorphMany {
    return $this
      ->setConnection(config('database.default'))
      ->morphMany(Comment::class, 'commentable');
  }

  public function loyaltyCard(): HasOne {
    return $this->hasOne(LoyaltyCard::class, 'id', 'id');
  }
}
