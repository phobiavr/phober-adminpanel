<?php

namespace App\Traits;

use App\Models\Revision;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Auth;

trait Revisionable {
  use Authorable;

  public function revisions(): MorphMany {
    return $this->setConnection(config('database.default'))->morphMany(Revision::class, 'revisionable');
  }

  protected static function bootRevisionable() {
    static::saved(function ($model) {
      $authorId = $model->author !== null ? $model->author->id : null;
      $revisedBy = Auth::check() ? Auth::id() : null;

      /** @var Revisionable $model */
      $model->revisions()->create([
        "author_id" => $authorId,
        "value" => $model->makeHidden(['created_at', 'updated_at'])->withoutRelations()->toJson(),
        "revised_by" => $revisedBy
      ]);
    });
  }
}