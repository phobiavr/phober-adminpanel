<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceInstancesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::connection('db_device')->create('device_instances', function (Blueprint $table) {
      $table->id();
      $table->bigInteger("device_id")->unsigned()->nullable();
      $table->foreign("device_id")->references("id")->on("devices")->onDelete("SET NULL");
      $table->boolean("active")->default(true);
      $table->dateTime("deactivation_start")->nullable();
      $table->dateTime("deactivation_end")->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::connection('db_device')->dropIfExists('device_instances');
  }
}
