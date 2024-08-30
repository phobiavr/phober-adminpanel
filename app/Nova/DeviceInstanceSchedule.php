<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Filters\Filter;
use Shared\Enums\ScheduleEnum;

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
            Enum::make('Type', 'type')->attach(ScheduleEnum::class)->sortable(),

            BelongsTo::make("Instance", 'instance', DeviceInstance::class)->sortable(),

            DateTime::make("Start")->nullable()->sortable(),

            DateTime::make("End")->nullable()->sortable(),

            Boolean::make("Active", 'isActive')->hideWhenUpdating()->hideWhenCreating(),

            DateTime::make('Created at')->format('YYYY-MM-DD HH:mm:ss')->sortable()->exceptOnForms(),
            DateTime::make('Updated at')->format('YYYY-MM-DD HH:mm:ss')->onlyOnDetail(),

            MorphOne::make('Author'),

            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),

            new Commenter(),
        ];
    }

    public function filters(Request $request) {
        return [
            EnumFilter::make('type', ScheduleEnum::class),
            new class extends Filter
            {
                public $name = 'Active';

                public $component = 'select-filter';

                public function apply(Request $request, $query, $value)
                {
                    if ($value === 'active') {
                        return $query->active();
                    } else {
                        $activeIds = \App\Models\DeviceInstanceSchedule::query()->active()->pluck('id');

                        return $query->whereNotIn('id', $activeIds);
                    }
                }

                public function options(Request $request)
                {
                    return ['Active' => 'active', 'Inactive' => 'inactive'];
                }
            }
        ];
    }
}
