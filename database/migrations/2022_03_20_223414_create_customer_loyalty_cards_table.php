<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerLoyaltyCardsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_crm')->create('loyalty_cards', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary()->index();
            $table->foreign('id')->on('customers')->references('id');

            $table->string('code')->nullable();
            /** @see \Phobiavr\PhoberLaravelCommon\Enums\LoyaltyCardStatusEnum */
            $table->string('status')->nullable()->default('BASIC');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_crm')->dropIfExists('loyalty_cards');
    }
}
