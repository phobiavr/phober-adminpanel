<?php


namespace App\Models\Interfaces;


interface HasMedia extends \Spatie\MediaLibrary\HasMedia {
  public function getApp(): string;

  public function setApp(string $app): void;
}
