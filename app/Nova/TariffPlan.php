<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Text;
use Pdmfc\NovaFields\InlineText;
use Phobiavr\PhoberLaravelCommon\Enums\SessionTariffEnum;
use Phobiavr\PhoberLaravelCommon\Enums\SessionTimeEnum;

class TariffPlan extends Resource {
    public static $model = \App\Models\TariffPlan::class;
    public static $title = 'label';
    public static $search = ['price', 'time', 'tariff', 'type', 'device'];
    public static $group = "Device";
    public static $perPageOptions = [100, 150, 250];
    public static $perPageViaRelationship = 10;
    public static $globallySearchable = false;

    public function fields(Request $request) {
        return [
            Enum::make('Tariff')->attach(SessionTariffEnum::class)->sortable()->exceptOnForms(),
            Enum::make('Time')->attach(SessionTimeEnum::class)->sortable()->exceptOnForms(),

            Text::make('Price'),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }

    public function filters(Request $request) {
        return [
            EnumFilter::make('Tariff', SessionTariffEnum::class),
            EnumFilter::make('Time', SessionTimeEnum::class),
        ];
    }
}
