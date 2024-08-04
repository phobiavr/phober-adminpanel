<?php

namespace App\Enums;

enum CustomerStatusEnum: string {
  case PENDING = 'pending';
  case APPROVED = 'approved';
  case VIP = 'vip';
  case BLACKLIST = 'blacklist';
}
