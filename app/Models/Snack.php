<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Snack extends Model {
    protected $connection = "db_staff";

    protected $fillable = ['name', 'stock', 'price'];
}
