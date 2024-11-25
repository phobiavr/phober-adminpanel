<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();

            $table->morphs('revisionable');

            $table->bigInteger('revised_by')->unsigned()->nullable();

            // CREATE / UPDATE / DELETE / RESTORE
            $table->string('action');

            $table->json('original_data')->nullable();
            $table->json('modified_data')->nullable();

            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('revisions');
    }
};
