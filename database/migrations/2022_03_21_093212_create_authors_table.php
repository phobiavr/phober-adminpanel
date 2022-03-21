<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('authors', function (Blueprint $table) {
      $table->id();
      $table->morphs('authorable');

      $table->bigInteger('created_by')->unsigned();
      $table->bigInteger('last_updated_by')->unsigned();

      $table->foreign('created_by')->on('users')->references('id');
      $table->foreign('last_updated_by')->on('users')->references('id');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('authors');
  }
}
