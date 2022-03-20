<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameGenreTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::connection('db_device')->create('game_genre', function (Blueprint $table) {
      $table->id();

      $table->bigInteger("game_id")->unsigned();
      $table->foreign("game_id")->references("id")->on("games")->onDelete("CASCADE");
      $table->bigInteger("genre_id")->unsigned();
      $table->foreign("genre_id")->references("id")->on("genres")->onDelete("CASCADE");

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::connection('db_device')->dropIfExists('game_genre');
  }
}
