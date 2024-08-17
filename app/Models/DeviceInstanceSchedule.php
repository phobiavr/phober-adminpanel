<?php

namespace App\Models;

use App\Traits\Authorable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;

class DeviceInstanceSchedule extends Model {
    use Authorable;

    protected $connection = "db_device";
    protected $casts = [
        'start' => 'datetime',
        'end'   => 'datetime',
    ];

    public function instance(): BelongsTo {
        return $this->belongsTo(DeviceInstance::class);
    }

    public function comments(): MorphMany {
        return $this
            ->setConnection(config('database.default'))
            ->morphMany(Comment::class, 'commentable');
    }
}
