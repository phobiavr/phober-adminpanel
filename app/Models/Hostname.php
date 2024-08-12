<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostname extends Model {
    use HasFactory;

    protected $casts = ["created_at" => "datetime", "updated_at" => "datetime"];

    protected $connection = 'db_shared';
}
