<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Shared\Traits\Authorable;

class Reservation extends Model {
    use Authorable;

    protected static $authorableType = "staff-reservation";
    protected $connection = "db_staff";
}
