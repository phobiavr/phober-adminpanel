<?php

namespace App;

use App\Models\Revision;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Auth;

trait Revisionable {
    public const HIDDEN_FIELDS = ['created_at', 'updated_at', 'id'];

    protected static function bootRevisionable(): void {
        $revisedBy = Auth::check() ? Auth::id() : null;

        static::created(function ($model) use ($revisedBy) {
            /** @var Revisionable $model */
            $model->revisions()->create([
                'modified_data' => $model->makeHidden(self::HIDDEN_FIELDS)->withoutRelations()->toArray(),
                'revised_by' => $revisedBy,
                'action' => $model->id ? RevisionActionEnum::RESTORE : RevisionActionEnum::CREATE
            ]);
        });

        static::updating(function ($model) use ($revisedBy) {
            $originalData = array_diff_key(
                $model->getOriginal(),
                array_flip(array_merge($model->getHidden(), self::HIDDEN_FIELDS))
            );

            /** @var Revisionable $model */
            $model->revisions()->create([
                'original_data' => $originalData,
                'modified_data' => $model->makeHidden(self::HIDDEN_FIELDS)->withoutRelations()->toArray(),
                'revised_by' => $revisedBy,
                'action' => RevisionActionEnum::UPDATE
            ]);
        });

        static::deleted(function ($model) use ($revisedBy) {
            /** @var Revisionable $model */
            $model->revisions()->create([
                'original_data' => $model->makeHidden(['rn'])->withoutRelations()->toArray(),
                'revised_by' => $revisedBy,
                'action' => RevisionActionEnum::DELETE
            ]);
        });
    }

    public function revisions(): MorphMany {
        return $this->setConnection(config('database.default'))->morphMany(Revision::class, 'revisionable');
    }

}
