<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

interface HasRevision {
  public function author(): MorphOne;

  public function revisions(): MorphMany;
}