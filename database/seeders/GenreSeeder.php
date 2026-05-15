<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['id' => '1', 'name' => 'Action', 'slug' => 'action', 'created_at' => '2025-07-13 23:58:09.0', 'updated_at' => '2025-07-13 23:58:09.0'],
            ['id' => '2', 'name' => 'Child-Game', 'slug' => 'child-game', 'created_at' => '2025-07-13 23:58:09.0', 'updated_at' => '2025-07-13 23:58:09.0'],
            ['id' => '3', 'name' => 'Cyberpunk', 'slug' => 'cyberpunk', 'created_at' => '2025-07-13 23:58:10.0', 'updated_at' => '2025-07-13 23:58:10.0'],
            ['id' => '4', 'name' => 'Design', 'slug' => 'design', 'created_at' => '2025-07-13 23:58:10.0', 'updated_at' => '2025-07-13 23:58:10.0'],
            ['id' => '5', 'name' => 'Detective', 'slug' => 'detective', 'created_at' => '2025-07-13 23:58:10.0', 'updated_at' => '2025-07-13 23:58:10.0'],
            ['id' => '6', 'name' => 'Exploration', 'slug' => 'exploration', 'created_at' => '2025-07-13 23:58:10.0', 'updated_at' => '2025-07-13 23:58:10.0'],
            ['id' => '7', 'name' => 'Singleplayer', 'slug' => 'singleplayer', 'created_at' => '2025-07-13 23:58:10.0', 'updated_at' => '2025-07-13 23:58:10.0'],
            ['id' => '8', 'name' => 'Fantasy', 'slug' => 'fantasy', 'created_at' => '2025-07-13 23:58:10.0', 'updated_at' => '2025-07-13 23:58:10.0'],
            ['id' => '9', 'name' => 'Horror', 'slug' => 'horror', 'created_at' => '2025-07-13 23:58:11.0', 'updated_at' => '2025-07-13 23:58:11.0'],
            ['id' => '10', 'name' => 'Sport', 'slug' => 'sport', 'created_at' => '2025-07-13 23:58:11.0', 'updated_at' => '2025-07-13 23:58:11.0'],
            ['id' => '11', 'name' => 'Space', 'slug' => 'space', 'created_at' => '2025-07-13 23:58:11.0', 'updated_at' => '2025-07-13 23:58:11.0'],
            ['id' => '12', 'name' => 'Quest', 'slug' => 'quest', 'created_at' => '2025-07-13 23:58:11.0', 'updated_at' => '2025-07-13 23:58:11.0'],
            ['id' => '13', 'name' => 'Adventure', 'slug' => 'adventure', 'created_at' => '2025-07-13 23:58:11.0', 'updated_at' => '2025-07-13 23:58:11.0'],
            ['id' => '14', 'name' => 'Music', 'slug' => 'music', 'created_at' => '2025-07-13 23:58:11.0', 'updated_at' => '2025-07-13 23:58:11.0'],
            ['id' => '15', 'name' => 'Multiplayer', 'slug' => 'multiplayer', 'created_at' => '2025-07-13 23:58:12.0', 'updated_at' => '2025-07-13 23:58:12.0'],
            ['id' => '16', 'name' => 'Rhythm', 'slug' => 'rhythm', 'created_at' => '2025-07-13 23:58:12.0', 'updated_at' => '2025-07-13 23:58:12.0'],
            ['id' => '17', 'name' => 'Violent', 'slug' => 'violent', 'created_at' => '2025-07-13 23:58:12.0', 'updated_at' => '2025-07-13 23:58:12.0'],
            ['id' => '18', 'name' => 'Simulation', 'slug' => 'simulation', 'created_at' => '2025-07-13 23:58:12.0', 'updated_at' => '2025-07-13 23:58:12.0'],
            ['id' => '19', 'name' => 'Strategy', 'slug' => 'strategy', 'created_at' => '2025-07-13 23:58:12.0', 'updated_at' => '2025-07-13 23:58:12.0'],
            ['id' => '20', 'name' => 'Survival', 'slug' => 'survival', 'created_at' => '2025-07-13 23:58:13.0', 'updated_at' => '2025-07-13 23:58:13.0'],
            ['id' => '21', 'name' => 'Shooter', 'slug' => 'shooter', 'created_at' => '2025-07-13 23:58:13.0', 'updated_at' => '2025-07-13 23:58:13.0'],
            ['id' => '22', 'name' => 'Racing', 'slug' => 'racing', 'created_at' => '2025-07-13 23:58:13.0', 'updated_at' => '2025-07-13 23:58:13.0'],
        ];

        DB::connection('db_device')->table("genres")->insert($genres);
    }
}
