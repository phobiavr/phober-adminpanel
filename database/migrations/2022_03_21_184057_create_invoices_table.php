<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::connection('db_staff')->create('invoices', function (Blueprint $table) {
      $table->id();

      $table->bigInteger('customer_id')->unsigned()->nullable();

      // 'QUEUE', 'PAYED', 'CANCELED'
      $table->string('status')->default('QUEUE');

      // 'CASH', 'CARD', 'BONUS'
      $table->string('payment_method')->nullable();

      $table->double('discount')->default(0);

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::connection('db_staff')->dropIfExists('invoices');
  }
}
