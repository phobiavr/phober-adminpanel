<?php

namespace App\Nova;

use App\Enums\DeviceInstanceScheduleEnum;
use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;

class DeviceInstanceSchedule extends Resource {
    public static $model = \App\Models\DeviceInstanceSchedule::class;
    public static $title = 'device.name';
    public static $search = ['mac_address'];
    public static $group = "Device";

    public static function label(): string {
        return 'Schedules';
    }

    public function fields(Request $request): array {
        return [
            Enum::make('Type', 'type')->attach(DeviceInstanceScheduleEnum::class),

            BelongsTo::make("Instance", 'instance', DeviceInstance::class),

            DateTime::make("Start")->nullable(),

            DateTime::make("End")->nullable(),

            Boolean::make("Active", 'isActive')->hideWhenUpdating()->hideWhenCreating(),

            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),

            new Commenter(),
        ];
    }

    public function filters(Request $request) {
        return [
            EnumFilter::make('type', DeviceInstanceScheduleEnum::class),
        ];
    }
}
