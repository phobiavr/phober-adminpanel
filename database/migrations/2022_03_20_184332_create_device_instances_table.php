<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceInstancesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_device')->create('instances', function (Blueprint $table) {
            $table->id();
            $table->string('mac_address')->nullable();

            /** @see \Phobiavr\PhoberLaravelCommon\Enums\DeviceEnum */
            $table->string('device');

            $table->boolean("active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_device')->dropIfExists('instances');
    }
}
