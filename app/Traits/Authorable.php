<?php

namespace App\Traits;

use App\Models\Author;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;

trait Authorable {
    protected static function bootAuthorable(): void {
        static::created(function ($model) {
            /** @var Authorable $model */
            if (Auth::check()) $model->author()->updateOrCreate([], ["created_by" => Auth::id(), "last_updated_by" => Auth::id()]);
        });

        static::updated(function ($model) {
            /** @var Authorable $model */
            if (Auth::check()) $model->author()->updateOrCreate([], ["last_updated_by" => Auth::id()]);
        });
    }

    public function author(): MorphOne {
        return $this->setConnection(config('database.default'))->morphOne(Author::class, 'authorable');
    }
}
