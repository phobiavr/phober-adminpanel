<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Genre extends Model {
  use HasFactory;

  protected $connection = 'db_device';

  public function setNameAttribute($value): void {
    $this->attributes['name'] = $value;
    $this->attributes['slug'] = Str::slug($value);
  }
}
