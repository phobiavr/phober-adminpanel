<?php


namespace App\Models;


use App\Models\Interfaces\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\InteractsWithMedia;

abstract class ModelInteractsWithMedia extends Model implements HasMedia {
    use InteractsWithMedia;

    protected string $app;

    public function getApp(): string {
        return $this->app;
    }

    public function setApp(string $app): void {
        $this->app = $app;
    }

    public function media(): MorphMany {
        return $this
            ->setConnection($this->connection)
            ->morphMany(config('media-library.media_model'), 'model');
    }
}
