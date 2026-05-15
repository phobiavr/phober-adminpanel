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
        Schema::connection('db_crm')->table('customers', function (Blueprint $table) {
            $table->string('status')->default('PENDING')->after('balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_crm')->table('customers', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
