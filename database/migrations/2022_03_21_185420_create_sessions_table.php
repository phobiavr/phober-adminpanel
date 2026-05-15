<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_staff')->create('game_sessions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('instance_id')->unsigned()->nullable();
            $table->bigInteger('schedule_id')->unsigned()->nullable();

            $table->bigInteger('serviced_by')->unsigned()->nullable();
            $table->foreign('serviced_by')->on('employees')->references('id');

            $table->integer('time')->nullable();
            $table->double('price')->nullable();

            /** @see \Phobiavr\PhoberLaravelCommon\Enums\SessionStatusEnum */
            $table->string('status')->default('QUEUE');

            $table->double('discount')->default(0);

            $table->bigInteger('invoice_id')->unsigned()->nullable();
            $table->foreign('invoice_id')->references('id')->on('invoices');

            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_staff')->dropIfExists('sessions');
    }
}
