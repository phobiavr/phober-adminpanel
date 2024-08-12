<?php

namespace App\Traits;

use App\Models\Revision;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Auth;

trait Revisionable {
    protected static function bootRevisionable() {
        static::created(function ($model) {
            $revisedBy = Auth::check() ? Auth::id() : null;

            /** @var Revisionable $model */
            $model->revisions()->create([
                "value"      => $model->makeHidden(['created_at', 'updated_at'])->withoutRelations()->toJson(),
                "revised_by" => $revisedBy,
                "type"       => "CREATE"
            ]);
        });

        static::updated(function ($model) {
            $revisedBy = Auth::check() ? Auth::id() : null;

            /** @var Revisionable $model */
            $model->revisions()->create([
                "value"      => $model->makeHidden(['created_at', 'updated_at'])->withoutRelations()->toJson(),
                "revised_by" => $revisedBy,
                "type"       => "UPDATE"
            ]);
        });

        static::deleted(function ($model) {
            $revisedBy = Auth::check() ? Auth::id() : null;

            /** @var Revisionable $model */
            $model->revisions()->create([
                "value"      => $model->makeHidden(['created_at', 'updated_at'])->withoutRelations()->toJson(),
                "revised_by" => $revisedBy,
                "type"       => "DELETE"
            ]);
        });
    }

    public function revisions(): MorphMany {
        return $this->setConnection(config('database.default'))->morphMany(Revision::class, 'revisionable');
    }
}
