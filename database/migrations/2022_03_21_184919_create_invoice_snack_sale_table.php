<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceSnackSaleTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::connection('db_staff')->create('invoice_snack_sale', function (Blueprint $table) {
      $table->bigInteger('invoice_id')->unsigned();
      $table->bigInteger('snack_sale_id')->unsigned();

      $table->foreign('invoice_id')->on('invoices')->references('id');
      $table->foreign('snack_sale_id')->on('snack_sales')->references('id');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::connection('db_staff')->dropIfExists('invoice_drink_sale');
  }
}
