<?php

namespace App\Models;

use App\RevisionActionEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Revision extends Model {
    protected $fillable = ['original_data', 'modified_data', 'revised_by', 'action'];
    protected $casts = [
        'created_at' => 'datetime',
        'original_data' => 'array',
        'modified_data' => 'array'];

    public function revisionable(): MorphTo {
        return $this->morphTo();
    }

    public function revisedBy(): BelongsTo {
        return $this->belongsTo(User::class, 'revised_by');
    }

    // https://stackoverflow.com/a/25784734
    public function setUpdatedAtAttribute($value) {
        //
    }

    public function getChangesAttribute() {
        $changes = [];

        if ($this->action === RevisionActionEnum::DELETE->value) {
            return $changes;
        }

        $currentData = $this->revisionable->toArray() ?? [];
        $originalData = $this->original_data ?? [];
        $modifiedData = $this->modified_data ?? [];

        $allKeys = array_unique(array_merge(array_keys($originalData), array_keys($modifiedData)));

        foreach ($allKeys as $key) {
            $oldValue = $originalData[$key] ?? null;
            $newValue = $modifiedData[$key] ?? null;
            $currentValue = $currentData[$key] ?? null;

            if ($newValue !== $oldValue) {
                $changes[$key] = [
                    'old' => $oldValue,
                    'new' => $newValue,
                    'current' => $currentValue
                ];
            }
        }

        return $changes;
    }
}
