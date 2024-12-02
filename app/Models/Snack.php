<?php

namespace App\Models;

use App\Commentable;
use Illuminate\Database\Eloquent\Model;

class Snack extends Model {
    use Commentable;

    protected $connection = "db_staff";

    protected $fillable = ['name', 'stock', 'price'];
}
