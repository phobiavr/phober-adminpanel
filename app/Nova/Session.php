<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;
use Shared\Enums\SessionStatusEnum;

class Session extends Resource {
    public static $model = \App\Models\Session::class;
    public static $title = 'id';
    public static $globallySearchable = false;
    public static $group = "Staff";

    public function fields(Request $request) {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            BelongsTo::make('Device', 'instance', DeviceInstance::class),

            BelongsTo::make('Serviced by', 'servicedBy', Employee::class),

            Number::make('Time'),
            Number::make('Price'),

            Enum::make('Status', 'status')->attach(SessionStatusEnum::class)->sortable(),

            Textarea::make('Note')->hideFromIndex(),

            DateTime::make('Created at')->format('YYYY-MM-DD HH:mm:ss')->sortable()->exceptOnForms(),
            DateTime::make('Updated at')->format('YYYY-MM-DD HH:mm:ss')->onlyOnDetail(),

            MorphOne::make('Author'),
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('status', SessionStatusEnum::class),
        ];
    }
}
