<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;

class TariffPlan extends Model {
    use Commentable;

    protected $connection = 'db_device';

    protected $fillable = [
        'tariff', 'time', 'price', 'device'
    ];

    public function getLabelAttribute(): string {
        return "{$this->device} - {$this->tariff} - {$this->time}";
    }
}
