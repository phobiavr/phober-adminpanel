<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('revisions', function (Blueprint $table) {
      $table->id();
      $table->morphs('revisionable');

      $table->bigInteger('author_id')->unsigned()->nullable();
      $table->foreign('author_id')->on('authors')->references('id');

      $table->bigInteger('revised_by')->unsigned()->nullable();
      $table->foreign('revised_by')->on('users')->references('id');

      $table->text('value');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('revisions');
  }
}