<?php

namespace App\Nova;

use App\Enums\SessionStatusEnum;
use App\Enums\SessionTariffEnum;
use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Number;

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

            Number::make('Initial time'),
            Number::make('Updated time')->hideWhenCreating()->hideFromIndex(),

            Number::make('Initial price'),
            Number::make('Updated price')->hideWhenCreating()->hideFromIndex(),

            Enum::make('Tariff', 'tariff')->attach(SessionTariffEnum::class)->sortable(),
            Enum::make('Status', 'status')->attach(SessionStatusEnum::class)->sortable(),

            DateTime::make('Start time')->format('YYYY-MM-DD HH:mm:ss'),
            DateTime::make('End time')->format('YYYY-MM-DD HH:mm:ss'),

            MorphOne::make('Author'),
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('tariff', SessionTariffEnum::class),
            EnumFilter::make('status', SessionStatusEnum::class),
        ];
    }
}
