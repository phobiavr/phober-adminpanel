<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameDevice extends Model
{
    protected $table = 'game_device';
    protected $connection = 'db_device';
    public $timestamps = false;
}
