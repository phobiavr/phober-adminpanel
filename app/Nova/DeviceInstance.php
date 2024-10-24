<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Text;
use Phobiavr\PhoberLaravelCommon\Enums\DeviceEnum;

class DeviceInstance extends Resource {
    public static $model = \App\Models\DeviceInstance::class;
    public static $title = 'label';
    public static $search = ['mac_address'];
    public static $group = "Device";

    public static function label(): string {
        return 'Instances';
    }

    public function fields(Request $request): array {
        return [
            Text::make('label')->hideWhenUpdating()->hideWhenCreating(),

            Text::make('Mac Address', 'mac_address'),

            Enum::make('Device')->attach(DeviceEnum::class)->sortable(),

            Boolean::make("Active", 'active')->hideWhenUpdating()->hideWhenCreating(),

            HasMany::make('Schedules', 'schedules', DeviceInstanceSchedule::class),
        ];
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('Device', DeviceEnum::class),
        ];
    }
}
