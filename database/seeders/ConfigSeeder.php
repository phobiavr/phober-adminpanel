<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $configs = [
            ['id' => '1', 'key' => 'FEATURE_RUDE_MODE', 'value' => 'false', 'created_at' => null, 'updated_at' => null],
        ];

        DB::connection('db_configs')->table('configs')->insert($configs);
    }
}
