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
        Schema::connection('db_staff')->create('sessions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('instance_id')->unsigned()->nullable();

            $table->bigInteger('serviced_by')->unsigned()->nullable();
            $table->foreign('serviced_by')->on('employees')->references('id');

            $table->integer('initial_time')->default(0);
            $table->integer('updated_time')->default(0);

            $table->double('initial_price')->default(0);
            $table->double('updated_price')->default(0);

            // MORNING, EVENING, EXTRA
            $table->string('tariff');

            $table->boolean('tariff_changed')->default(0);

            // 'QUEUE', 'ACTIVE', 'CANCELED', 'FINISHED'
            $table->string('status')->default('QUEUE');

            $table->text('note')->nullable();

            $table->dateTime('start_time')->default(null)->nullable();
            $table->dateTime('end_time')->default(null)->nullable();

            $table->bigInteger('written_by')->unsigned()->nullable();
            $table->foreign('written_by')->on('employees')->references('id');

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
