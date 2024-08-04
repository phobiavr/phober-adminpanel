<?php

namespace App\Enums;

enum ContactTypeEnum: string
{
  case PHONE = 'phone';
  case EMAIL = 'email';
  case TELEGRAM = 'telegram';
}
