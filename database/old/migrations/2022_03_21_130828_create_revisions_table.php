<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->morphs('revisionable');

            $table->bigInteger('revised_by')->unsigned()->nullable();

            // 'CREATE', 'UPDATE', 'DELETE'
            $table->string('type');

            $table->text('value')->nullable();
            $table->text('difference')->nullable();

            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('revisions');
    }
}
