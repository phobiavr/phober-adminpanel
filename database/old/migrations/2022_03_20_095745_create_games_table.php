<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('db_device')->create('games', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug")->nullable();
            $table->string("video")->nullable();
            $table->json("description")->nullable();
            $table->integer("rating")->nullable()->default(0);
            $table->boolean("multiplayer")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('db_device')->dropIfExists('games');
    }
}
