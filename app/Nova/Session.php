<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;
use Phobiavr\PhoberLaravelCommon\Enums\SessionStatusEnum;

class Session extends Resource {
    public static $model = \App\Models\Session::class;
    public static $title = 'id';
    public static $globallySearchable = false;
    public static $group = "Staff";

    public function fields(Request $request) {
        return [
            BelongsTo::make('Device', 'instance', DeviceInstance::class),

            BelongsTo::make('Serviced by', 'servicedBy', Employee::class),

            Number::make('Time')->displayUsing(fn($value) => $value . ' mins'),

            Enum::make('Status', 'status')->attach(SessionStatusEnum::class)->sortable(),

            Number::make('Price')->displayUsing(fn($value) => $value . ' AZN'),
            Number::make('Discount')->displayUsing(fn($value) => $value . ' %'),
            Number::make('End Price')->displayUsing(fn($value) => $value . ' AZN'),

            Textarea::make('Note')->hideFromIndex(),

            DateTime::make('Created at')->sortable(),
            DateTime::make('Updated at')->onlyOnDetail(),

            MorphOne::make('Author')->onlyOnDetail(),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('status', SessionStatusEnum::class),
        ];
    }
}
