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

            $table->string('contacts');
            $table->dateTime('date')->nullable();
            $table->integer('customers_qty')->nullable();
            $table->integer('customers_yo')->nullable();

            /** @see \Phobiavr\PhoberLaravelCommon\Enums\ReservationStatusEnum */
            $table->string('status')->default('QUEUE');
            $table->text('note')->nullable();

            /** @see \Phobiavr\PhoberLaravelCommon\Enums\ReservationRequestEnum */
            $table->string('request_from')->nullable();

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
