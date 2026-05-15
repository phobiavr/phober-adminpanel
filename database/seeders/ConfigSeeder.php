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
            ['id' => '1', 'key' => 'APP_NAME', 'value' => 'Phober', 'created_at' => null, 'updated_at' => null],
            ['id' => '2', 'key' => 'APP_ENV', 'value' => 'local', 'created_at' => null, 'updated_at' => null],
            ['id' => '3', 'key' => 'APP_DEBUG', 'value' => 'true', 'created_at' => null, 'updated_at' => null],
            ['id' => '4', 'key' => 'TELESCOPE_ENABLED', 'value' => 'true', 'created_at' => null, 'updated_at' => null],
            ['id' => '5', 'key' => 'LOG_CHANNEL', 'value' => 'stack', 'created_at' => null, 'updated_at' => null],
            ['id' => '6', 'key' => 'LOG_DEPRECATIONS_CHANNEL', 'value' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => '7', 'key' => 'LOG_LEVEL', 'value' => 'debug', 'created_at' => null, 'updated_at' => null],
            ['id' => '8', 'key' => 'DB_SHARED_CONNECTION', 'value' => 'mysql', 'created_at' => null, 'updated_at' => null],
            ['id' => '9', 'key' => 'DB_SHARED_HOST', 'value' => 'db_mysql', 'created_at' => null, 'updated_at' => null],
            ['id' => '10', 'key' => 'DB_SHARED_PORT', 'value' => '3306', 'created_at' => null, 'updated_at' => null],
            ['id' => '11', 'key' => 'DB_SHARED_DATABASE', 'value' => 'phober_shared', 'created_at' => null, 'updated_at' => null],
            ['id' => '12', 'key' => 'DB_SHARED_USERNAME', 'value' => 'root', 'created_at' => null, 'updated_at' => null],
            ['id' => '13', 'key' => 'DB_SHARED_PASSWORD', 'value' => 'root', 'created_at' => null, 'updated_at' => null],
            ['id' => '14', 'key' => 'BROADCAST_DRIVER', 'value' => 'log', 'created_at' => null, 'updated_at' => null],
            ['id' => '15', 'key' => 'CACHE_DRIVER', 'value' => 'file', 'created_at' => null, 'updated_at' => null],
            ['id' => '16', 'key' => 'FILESYSTEM_DISK', 'value' => 'local', 'created_at' => null, 'updated_at' => null],
            ['id' => '17', 'key' => 'QUEUE_CONNECTION', 'value' => 'database', 'created_at' => null, 'updated_at' => null],
            ['id' => '18', 'key' => 'SESSION_DRIVER', 'value' => 'file', 'created_at' => null, 'updated_at' => null],
            ['id' => '19', 'key' => 'SESSION_LIFETIME', 'value' => '120', 'created_at' => null, 'updated_at' => null],
            ['id' => '20', 'key' => 'MEMCACHED_HOST', 'value' => '127.0.0.1', 'created_at' => null, 'updated_at' => null],
            ['id' => '21', 'key' => 'MAIL_MAILER', 'value' => 'smtp', 'created_at' => null, 'updated_at' => null],
            ['id' => '22', 'key' => 'MAIL_HOST', 'value' => 'mailhog', 'created_at' => null, 'updated_at' => null],
            ['id' => '23', 'key' => 'MAIL_PORT', 'value' => '1025', 'created_at' => null, 'updated_at' => null],
            ['id' => '24', 'key' => 'MAIL_USERNAME', 'value' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => '25', 'key' => 'MAIL_PASSWORD', 'value' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => '26', 'key' => 'MAIL_ENCRYPTION', 'value' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => '27', 'key' => 'MAIL_FROM_ADDRESS', 'value' => 'hello@example.com', 'created_at' => null, 'updated_at' => null],
            ['id' => '28', 'key' => 'MAIL_FROM_NAME', 'value' => '${APP_NAME}', 'created_at' => null, 'updated_at' => null],
        ];

        DB::connection('db_configs')->table('configs')->insert($configs);
    }
}
