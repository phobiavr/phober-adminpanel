<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;

class Customer extends Model {
  use HasFactory;

  protected $connection = "db_crm";

  protected $casts = [
    "birthday" => "date",
  ];

  public function comments(): MorphMany {
    return $this
      ->setConnection(config('database.default'))
      ->morphMany(Comment::class, 'commentable');
  }
}
