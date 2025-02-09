<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_shared')->create('authors', function (Blueprint $table) {
            $table->id();
            $table->morphs('authorable');

            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->bigInteger('last_updated_by')->unsigned()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_shared')->dropIfExists('authors');
    }
}
