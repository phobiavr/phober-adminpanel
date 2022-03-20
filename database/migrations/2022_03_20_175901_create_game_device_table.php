<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameDeviceTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::connection('db_device')->create('game_device', function (Blueprint $table) {
      $table->bigInteger("game_id")->unsigned();
      $table->foreign("game_id")->references("id")->on("games")->onDelete("CASCADE");
      $table->bigInteger("device_id")->unsigned();
      $table->foreign("device_id")->references("id")->on("devices")->onDelete("CASCADE");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::connection('db_device')->dropIfExists('game_device');
  }
}
