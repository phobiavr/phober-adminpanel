<?php

namespace App;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Commentable {
    /**
     * @return MorphMany<Comment>
     */
    public function comments(): MorphMany {
        return $this->setConnection(config('database.default'))->morphMany(Comment::class, 'commentable');
    }
}
