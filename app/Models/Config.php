<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model {
    protected $connection = 'db_shared';
    protected $fillable = ['key', 'value'];
}
