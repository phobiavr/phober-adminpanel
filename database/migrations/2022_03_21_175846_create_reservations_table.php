<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_staff')->create('reservations', function (Blueprint $table) {
            $table->id();

            $table->string('contacts')->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('customers_qty')->nullable();
            $table->integer('customers_yo')->nullable();

            //$table->string('wish')->default('not decided');

            // 'QUEUE', 'CANCELED', 'APPROVED
            $table->string('status')->default('QUEUE');
            $table->text('note')->nullable();

            // 'WEBSITE', 'STAFF_APP'
            $table->string('request_from')->nullable();

            $table->bigInteger('written_by')->unsigned()->nullable();
            $table->foreign('written_by')->on('employees')->references('id');

            $table->bigInteger('customer_id')->unsigned()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_staff')->dropIfExists('reservations');
    }
}
