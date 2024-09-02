<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model {
    use HasFactory;

    protected $connection = 'db_staff';

    public function sessions(): HasMany {
        return $this->hasMany(Session::class, 'serviced_by');
    }

    public function getServicedTimeAttribute() {
        return $this->sessions()->sum('time');
    }
}
