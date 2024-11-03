<?php

namespace App;

enum ServiceEnum: string {
    case AUTH = 'auth-server';
    case CRM = 'crm-service';
    case HARDWARE = 'device-service';
    case NOTIFICATION = 'notification-server';
    case STAFF = 'staff-service';
}
