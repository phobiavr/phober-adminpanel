<?php

namespace App\Enums;

enum SessionTariffEnum: string {
    case MORNING = 'MORNING';
    case EVENING = 'EVENING';
    case EXTRA = 'EXTRA';
}
