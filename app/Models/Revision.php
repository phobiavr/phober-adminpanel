<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Revision extends Model {
  protected $fillable = ["value", "author_id", "revised_by"];

  public function revisionable(): MorphTo {
    return $this->morphTo();
  }
}
