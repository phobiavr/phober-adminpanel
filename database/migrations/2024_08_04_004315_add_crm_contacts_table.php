<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(): void {
    Schema::connection('db_crm')->create('contacts', function (Blueprint $table) {
      $table->id();
      $table->foreignId('customer_id');
      $table->string('value');
      $table->string('type')->index();
      $table->timestamps();

      $table->foreign('customer_id')->on('customers')->references('id');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(): void {
    Schema::connection('db_crm')->dropIfExists('contacts');
  }
};
