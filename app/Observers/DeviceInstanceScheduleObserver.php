<?php

namespace App\Observers;

use App\Events\ScheduleUpdated;
use App\Models\DeviceInstanceSchedule;

class DeviceInstanceScheduleObserver
{
    public function created(DeviceInstanceSchedule $schedule): void
    {
        ScheduleUpdated::dispatch($schedule, 'created');
    }

    public function updated(DeviceInstanceSchedule $schedule): void
    {
        ScheduleUpdated::dispatch($schedule, 'updated');
    }

    public function deleted(DeviceInstanceSchedule $schedule): void
    {
        ScheduleUpdated::dispatch($schedule, 'deleted');
    }
}
