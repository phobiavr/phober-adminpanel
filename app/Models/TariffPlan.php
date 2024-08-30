<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TariffPlan extends Model {
    protected $connection = 'db_device';

    protected $fillable = [
        'tariff', 'time', 'price', 'device'
    ];
}
