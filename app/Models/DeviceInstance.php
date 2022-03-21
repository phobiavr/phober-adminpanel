<?php

namespace App\Models;

use App\Traits\Authorable;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use KirschbaumDevelopment\NovaComments\Models\Comment;

class DeviceInstance extends Model {
  use Authorable, HasFactory;

  //TODO:: add serial number

  protected $connection = "db_device";
  public const ACTIVE = true;
  public const INACTIVE = false;
  protected $casts = [
    'active' => 'boolean',
    'deactivation_start' => 'datetime',
    'deactivation_end' => 'datetime',
  ];
  protected $fillable = ["device_id"];
  protected $appends = ['currently_available'];

  public function comments(): MorphMany {
    return $this
      ->setConnection(config('database.default'))
      ->morphMany(Comment::class, 'commentable');
  }

  public function device(): BelongsTo {
    return $this->belongsTo(Device::class);
  }

  public function getCurrentlyActiveAttribute(): bool {
    $now = (new DateTime())->format('Y-m-d h:m:s');

    if (!$this->active) {
      if (!$this->deactivation_start && !$this->deactivation_end) {
        return false;
      } elseif ($this->deactivation_start && $this->deactivation_end) {
        if ($now > $this->deactivation_start && $now < $this->deactivation_end) {
          return false;
        }
      } elseif (!$this->deactivation_start && $this->deactivation_end) {
        if ($now < $this->deactivation_end) {
          return false;
        }
      } elseif ($this->deactivation_start && !$this->deactivation_end) {
        if ($now > $this->deactivation_start) {
          return false;
        }
      } else {
        return true;
      }
    }

    return true;
  }
}
