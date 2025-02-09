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
        Schema::connection('db_auth')->create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::connection('db_auth')->create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::connection('db_auth')->create('role_permissions', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained(table: 'roles');
            $table->foreignId('permission_id')->constrained(table: 'permissions');
        });

        Schema::connection('db_auth')->create('user_roles', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained(table: 'users');
            $table->foreignId('role_id')->constrained(table: 'roles');
        });

        Schema::connection('db_auth')->create('user_permissions', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained(table: 'users');
            $table->foreignId('permission_id')->constrained(table: 'permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_auth')->dropIfExists('role_permissions');
        Schema::connection('db_auth')->dropIfExists('user_roles');
        Schema::connection('db_auth')->dropIfExists('user_permissions');
        Schema::connection('db_auth')->dropIfExists('permissions');
        Schema::connection('db_auth')->dropIfExists('roles');
    }
};
