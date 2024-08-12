<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceSessionTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_staff')->create('invoice_session', function (Blueprint $table) {
            $table->bigInteger('invoice_id')->unsigned();
            $table->bigInteger('session_id')->unsigned();

            $table->foreign('invoice_id')->on('invoices')->references('id')->onDelete('CASCADE');
            $table->foreign('session_id')->on('sessions')->references('id')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_staff')->dropIfExists('invoice_session');
    }
}
