<?php

namespace App\Traits;

use App\Models\Author;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;

trait Authorable {
  public function author(): MorphOne {
    return $this->setConnection(config('database.default'))->morphOne(Author::class, 'authorable');
  }

  protected static function boot() {
    parent::boot();


    static::created(function ($model) {
      /** @var Authorable $model */
      if (Auth::check()) $model->author()->updateOrCreate([], ["created_by" => Auth::id(), "updated_by" => Auth::id()]);
    });

    static::updated(function ($model) {
      /** @var Authorable $model */
      if (Auth::check()) $model->author()->updateOrCreate([], ["updated_by" => Auth::id()]);
    });
  }
}