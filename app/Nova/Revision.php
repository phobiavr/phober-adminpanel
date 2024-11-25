<?php

namespace App\Nova;

use App\Nova\Actions\RollBack;
use App\RevisionActionEnum;
use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Revision extends Resource {
    public static $model = \App\Models\Revision::class;
    public static $globallySearchable = false;
    public static $group = "AdminPanel";

    public function authorizedToUpdate($request) {
        return false;
    }

    public function authorizedToDelete($request) {
        return false;
    }

    public function authorizedToReplicate(Request $request) {
        return false;
    }

    public function authorizedToRunAction(NovaRequest $request, Action $action) {
        return true;
    }

    public function fields(Request $request) {
        return [
            MorphTo::make('Revisionable'),

            BelongsTo::make('Revised by', 'revisedBy', User::class),

            Enum::make('Action')->attach(RevisionActionEnum::class)->sortable()->exceptOnForms(),

            Code::make('Original', 'original_data')->json(),
            Code::make('Modified', 'modified_data')->json(),
            Code::make('Changes')->json(),

            DateTime::make('Date', 'created_at')->sortable()->exceptOnForms(),
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request) {
        return [
            (new RollBack())->showInline()
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('Action', RevisionActionEnum::class),
        ];
    }
}
