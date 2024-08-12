<?php

namespace App\Nova\Actions\Revision;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class RollBack extends Action {
    use InteractsWithQueue, Queueable;

    public $showOnTableRow = true;

    /**
     * Perform the action on the given models.
     *
     * @param ActionFields $fields
     * @param Collection $models
     * @return void
     */
    public function handle(ActionFields $fields, Collection $models): void {
        foreach ($models as $model) {
            if ($model->revisionable) {
                $model->revisionable->update(json_decode($model->value, true));
            } else {
                $model_name = $model->revisionable_type;
                $model_name::create(json_decode($model->value, true));
            }
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields() {
        return [];
    }
}
