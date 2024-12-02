<?php

namespace App\Models;

class Comment extends \KirschbaumDevelopment\NovaComments\Models\Comment {
    // https://stackoverflow.com/a/25784734
    public function setUpdatedAtAttribute($value) {
        //
    }
}
