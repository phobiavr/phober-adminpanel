<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Filters\Filter;
use Phobiavr\PhoberLaravelCommon\Enums\ScheduleEnum;

class DeviceInstanceSchedule extends Resource {
    public static $model = \App\Models\DeviceInstanceSchedule::class;
    public static $title = 'device.name';
    public static $search = ['mac_address'];
    public static $group = "Device";

    private const TYPE_LABELS = [
        ScheduleEnum::MAINTENANCE->value => 'Техобслуживание',
        ScheduleEnum::RESERVATION->value => 'Бронирование',
        ScheduleEnum::INSPECTION->value  => 'Осмотр',
        ScheduleEnum::REPAIR->value      => 'Ремонт',
        ScheduleEnum::ON_EVENT->value    => 'Мероприятие',
        ScheduleEnum::IN_USE->value      => 'Используется',
        ScheduleEnum::IN_SESSION->value  => 'В сеансе',
        ScheduleEnum::QUEUE->value       => 'Очередь',
        ScheduleEnum::CANCELED->value    => 'Отменено',
    ];

    private const FORM_EXCLUDED_TYPES = [
        ScheduleEnum::IN_USE->value,
        ScheduleEnum::IN_SESSION->value,
        ScheduleEnum::QUEUE->value,
        ScheduleEnum::CANCELED->value,
    ];

    public static function label(): string {
        return 'Schedules';
    }

    public function fields(Request $request): array {
        $editableOptions = array_diff_key(self::TYPE_LABELS, array_flip(self::FORM_EXCLUDED_TYPES));

        return [
            Select::make('Type', 'type')
                ->options(self::TYPE_LABELS)
                ->displayUsingLabels()
                ->sortable()
                ->exceptOnForms(),

            Select::make('Type', 'type')
                ->options($editableOptions)
                ->displayUsingLabels()
                ->rules('required')
                ->onlyOnForms(),

            BelongsTo::make("Instance", 'instance', DeviceInstance::class)->sortable(),

            DateTime::make("Start")->nullable()->sortable(),

            DateTime::make("End")->nullable()->sortable(),

            Boolean::make("Active", 'isActive')->hideWhenUpdating()->hideWhenCreating(),

            DateTime::make('Created at')->sortable()->exceptOnForms(),
            DateTime::make('Updated at')->onlyOnDetail(),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }

    public function filters(Request $request): array {
        return [
            new class extends Filter {
                public $name = 'Active';
                public $component = 'select-filter';

                public function apply(Request $request, $query, $value) {
                    if ($value === 'active') {
                        return $query->active();
                    }
                    $activeIds = \App\Models\DeviceInstanceSchedule::query()->active()->pluck('id');
                    return $query->whereNotIn('id', $activeIds);
                }

                public function options(Request $request): array {
                    return ['Active' => 'active', 'Inactive' => 'inactive'];
                }
            },
        ];
    }
}
