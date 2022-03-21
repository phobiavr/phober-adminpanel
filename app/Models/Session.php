<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Session extends Model {
  use HasFactory;

  protected $connection = "db_staff";

  public static function tariffEnum(): Collection {
    return collect(['MORNING', 'EVENING', 'EXTRA']);
  }

  public static function statusEnum(): Collection {
    return collect(['QUEUE', 'ACTIVE', 'CANCELED', 'FINISHED']);
  }

  protected static function boot() {
    parent::boot();

    static::creating(function ($model) {
      $model->updated_time = $model->initial_time;
      $model->updated_price = $model->initial_price;
    });
  }
}
