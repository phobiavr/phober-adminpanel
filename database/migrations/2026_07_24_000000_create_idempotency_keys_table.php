<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::connection('db_shared')->create('idempotency_keys', function (Blueprint $table) {
            $table->id();
            $table->string('scope');
            $table->string('key');
            $table->char('request_hash', 64);
            $table->unsignedSmallInteger('response_status')->nullable();
            $table->string('response_content_type')->nullable();
            $table->longText('response_body')->nullable();
            $table->timestamps();

            $table->unique(['scope', 'key']);
        });
    }

    public function down(): void {
        Schema::connection('db_shared')->dropIfExists('idempotency_keys');
    }
};
