<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameGenre extends Model
{
    protected $table = 'game_genre';
    protected $connection = 'db_device';
    public $timestamps = false;
}
