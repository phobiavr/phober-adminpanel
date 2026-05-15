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
    public function up() {
        Schema::connection('db_device')->create('tariff_plans', function (Blueprint $table) {
            $table->id();

            /** @see \Phobiavr\PhoberLaravelCommon\Enums\SessionTariffEnum*/
            $table->string('tariff');

            /** @see \Phobiavr\PhoberLaravelCommon\Enums\SessionTimeEnum */
            $table->string('time');
            $table->double('price');

            /** @see \Phobiavr\PhoberLaravelCommon\Enums\DeviceEnum */
            $table->string('device');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_device')->dropIfExists('tariff_plans');
    }
};
