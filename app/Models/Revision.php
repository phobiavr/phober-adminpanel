<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Revision extends Model {
    protected $fillable = ["value", "author_id", "revised_by", "type", 'difference'];
    protected $casts = ["created_at" => "datetime", 'difference' => 'array'];

    public function revisionable(): MorphTo {
        return $this->morphTo();
    }

    public function getModelAttribute() {
        //https://stackoverflow.com/a/1361752
        $model = $this->revisionable_type;

        return substr($model, strrpos($model, '\\') + 1);
    }

    public function revisedBy(): BelongsTo {
        return $this->belongsTo(User::class, 'revised_by');
    }

    // https://stackoverflow.com/a/25784734
    public function setUpdatedAtAttribute($value) {
        //
    }
}
