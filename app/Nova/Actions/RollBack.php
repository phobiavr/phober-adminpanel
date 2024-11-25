<?php

namespace App\Nova\Actions;

use App\RevisionActionEnum;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class RollBack extends Action {
    use InteractsWithQueue, Queueable;

    public $showInline = true;

    /**
     * Perform the action on the given models.
     *
     * @param \Laravel\Nova\Fields\ActionFields $fields
     * @param \Illuminate\Support\Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models) {
        foreach ($models as $model) {
            if ($model->revisionable && $model->original_data) {
                $model->revisionable->update($model->original_data);
            } else if ($model->action === RevisionActionEnum::DELETE->value) {
                $baseClass = Relation::getMorphedModel($model->revisionable_type);
                (new ($baseClass))->create($model->original_data);
            }
        }

        return Action::redirect(request()->query('viaResourceId') ?? request()->query('resources'));
    }
}
