<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnackSalesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::connection('db_staff')->create('snack_sales', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('snack_id')->unsigned();
      $table->foreign('snack_id')->on('snacks')->references('id');

      $table->integer('quantity')->unsigned();

      $table->bigInteger('sold_by')->unsigned();
      $table->foreign('sold_by')->on('employees')->references('id');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::connection('db_staff')->dropIfExists('snack_sales');
  }
}
