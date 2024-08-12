<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration {
  public function up(): void {
    Schema::connection('db_shared')->create('media', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('app');
      $table->morphs('model');
      $table->uuid()->nullable()->unique();
      $table->string('collection_name');
      $table->string('name');
      $table->string('file_name');
      $table->string('mime_type')->nullable();
      $table->string('disk');
      $table->string('conversions_disk')->nullable();
      $table->unsignedBigInteger('size');
      $table->json('manipulations');
      $table->json('custom_properties');
      $table->json('generated_conversions');
      $table->json('responsive_images');
      $table->unsignedInteger('order_column')->nullable()->index();

      $table->nullableTimestamps();
    });

    DB::connection('db_shared')->statement("CREATE VIEW media_device_service_view AS SELECT * FROM media WHERE app = 'device-service'");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(): void {
    DB::connection('db_shared')->statement("DROP VIEW media_device_service_view");

    Schema::connection('db_shared')->dropIfExists('media');
  }
}
