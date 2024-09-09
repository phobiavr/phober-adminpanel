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
                "value"      => null,
                'difference' => $model->makeHidden(['created_at', 'updated_at'])->withoutRelations()->toJson(),
                "revised_by" => $revisedBy,
                "type"       => "CREATE"
            ]);
        });

        static::updated(function ($model) {
            $revisedBy = Auth::check() ? Auth::id() : null;

            $new = $model->makeHidden(['created_at', 'updated_at'])->withoutRelations()->toJson();
            $old = collect($model->getOriginal())->except(['created_at', 'updated_at'])->toJson();
            $diff = array_diff(json_decode($old, TRUE), json_decode($new, true));

            /** @var Revisionable $model */
            $model->revisions()->create([
                "value"      => $old,
                'difference' => json_encode($diff),
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
