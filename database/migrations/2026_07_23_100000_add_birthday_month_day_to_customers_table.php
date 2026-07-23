<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBirthdayMonthDayToCustomersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_crm')->table('customers', function (Blueprint $table) {
            $table->unsignedSmallInteger('birthday_month_day')->nullable()->after('birthday');
            $table->index('birthday_month_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_crm')->table('customers', function (Blueprint $table) {
            $table->dropIndex(['birthday_month_day']);
            $table->dropColumn('birthday_month_day');
        });
    }
}
