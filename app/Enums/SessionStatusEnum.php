<?php

namespace App\Enums;

enum SessionStatusEnum: string {
    case QUEUE = 'QUEUE';
    case ACTIVE = 'ACTIVE';
    case CANCELED = 'CANCELED';
    case FINISHED = 'FINISHED';
}