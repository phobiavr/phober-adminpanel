<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //TODO:: switch to factory

        Genre::create(["name" => "Action"]);
        Genre::create(["name" => "Child-Game"]);
        Genre::create(["name" => "Cyberpunk"]);
        Genre::create(["name" => "Design"]);
        Genre::create(["name" => "Detective"]);
        Genre::create(["name" => "Exploration"]);
        Genre::create(["name" => "Singleplayer"]);
        Genre::create(["name" => "Fantasy"]);
        Genre::create(["name" => "Horror"]);
        Genre::create(["name" => "Sport"]);
        Genre::create(["name" => "Space"]);
        Genre::create(["name" => "Quest"]);
        Genre::create(["name" => "Adventure"]);
        Genre::create(["name" => "Music"]);
        Genre::create(["name" => "Multiplayer"]);
        Genre::create(["name" => "Rhythm"]);
        Genre::create(["name" => "Violent"]);
        Genre::create(["name" => "Simulation"]);
        Genre::create(["name" => "Strategy"]);
        Genre::create(["name" => "Survival"]);
        Genre::create(["name" => "Shooter"]);
        Genre::create(["name" => "Racing"]);
    }
}
