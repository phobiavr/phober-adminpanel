<?php

namespace App\Policies;

use App\Models\DeviceInstanceSchedule;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Phobiavr\PhoberLaravelCommon\Enums\ScheduleEnum;

class DeviceInstanceSchedulePolicy {
    use HandlesAuthorization;

    private const READONLY_TYPES = [
        ScheduleEnum::IN_USE->value,
        ScheduleEnum::IN_SESSION->value,
        ScheduleEnum::QUEUE->value,
        ScheduleEnum::CANCELED->value,
    ];

    public function viewAny(User $user): bool {
        return true;
    }

    public function view(User $user, DeviceInstanceSchedule $schedule): bool {
        return true;
    }

    public function create(User $user): bool {
        return true;
    }

    public function update(User $user, DeviceInstanceSchedule $schedule): bool {
        return !in_array($schedule->type, self::READONLY_TYPES);
    }

    public function delete(User $user, DeviceInstanceSchedule $schedule): bool {
        return !in_array($schedule->type, self::READONLY_TYPES) || $schedule->type == ScheduleEnum::QUEUE->value;
    }

    public function restore(User $user, DeviceInstanceSchedule $schedule): bool {
        return false;
    }

    public function forceDelete(User $user, DeviceInstanceSchedule $schedule): bool {
        return false;
    }
}
