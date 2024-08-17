<?php

namespace App\Enums;

enum DeviceInstanceScheduleEnum: string {
    case MAINTENANCE = 'maintenance';
    case RESERVATION = 'reservation';
    case INSPECTION = 'inspection';
    case REPAIR = 'repair';
    case IN_USE = 'in_use';
}
