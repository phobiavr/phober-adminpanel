<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Phobiavr\PhoberLaravelCommon\Enums\ReservationRequestEnum;
use Phobiavr\PhoberLaravelCommon\Enums\ReservationStatusEnum;

class Reservation extends Resource {
    public static $model = \App\Models\Reservation::class;
    public static $title = 'id';
    public static $globallySearchable = false;
    public static $group = "Staff";

    public function fields(Request $request) {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            BelongsTo::make('Customer')->nullable(),

            Text::make('Contacts'),
            DateTime::make('Date')->sortable(),

            Number::make('Customers Qty'),
            Number::make('Customers YO'),

            Enum::make('Status')->attach(ReservationStatusEnum::class)->sortable(),
            Enum::make('Request From')->attach(ReservationRequestEnum::class)->sortable(),

            Textarea::make('Note')->hideFromIndex(),

            DateTime::make('Created at')->sortable()->exceptOnForms(),
            DateTime::make('Updated at')->onlyOnDetail(),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('Status', ReservationStatusEnum::class),
            EnumFilter::make('Request From', ReservationRequestEnum::class),
        ];
    }
}
