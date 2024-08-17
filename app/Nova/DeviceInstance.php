<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Text;

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

            BelongsTo::make("Device")->sortable(),

            Boolean::make("Active", 'active')->hideWhenUpdating()->hideWhenCreating(),

            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),

            HasMany::make('Schedules', 'schedules', DeviceInstanceSchedule::class),

            new Commenter(),
        ];
    }

    public function filters(Request $request): array {
        return [
            self::filterByBelongsTo('Device', 'device_id', \App\Models\Device::class),
        ];
    }
}
