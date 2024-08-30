<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceInstanceScheduleTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void {
        Schema::connection('db_device')->create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->bigInteger("instance_id")->unsigned();
            $table->foreign("instance_id")->references("id")->on("instances")->onDelete("CASCADE");
            $table->dateTime("start")->nullable();
            $table->dateTime("end")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void {
        Schema::connection('db_device')->dropIfExists('schedules');
    }
}
