<?php

namespace App\Nova;

use App\Nova\Actions\Revision\RollBack;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Text;

class Revision extends Resource {
    public static $model = \App\Models\Revision::class;
    public static $title = 'id';
    public static $globallySearchable = false;
    public static $group = "AdminPanel";

    public function fields(Request $request) {
        return [
            MorphTo::make('Revisionable')->exceptOnForms(),

            BelongsTo::make('Revised by', 'revisedBy', User::class),

            Text::make('Type')->exceptOnForms(),

            Code::make('Old value', 'value'),
            Code::make('Difference')->onlyOnIndex()->displayUsing(function ($value) {
                return $this->type === 'UPDATE' ? $value : '';
            } ),

            Code::make('Difference')->showOnDetail(),

            DateTime::make('Created at')->format('YYYY-MM-DD HH:mm:ss')->sortable()->exceptOnForms(),
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
            RollBack::make(),
        ];
    }
}
