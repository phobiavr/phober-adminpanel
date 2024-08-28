<?php

namespace App\Models;

use App\Traits\Revisionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;
use Shared\Traits\Authorable;

class Config extends Model {
    use HasFactory, Revisionable, Authorable;

    protected $connection = 'db_config';

    protected $fillable = ['key', 'value'];

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }
}
