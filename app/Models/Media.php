<?php

namespace App\Models;

class Media extends \Spatie\MediaLibrary\MediaCollections\Models\Media {
  protected $connection = "db_media";

  public static function boot() {
    parent::boot();

    static::creating(static function ($media) {
      $media->app = $media->model->getApp();
    });
  }
}
