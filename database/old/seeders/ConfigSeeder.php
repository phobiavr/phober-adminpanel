<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //TODO:: switch to factory

        $configs = [
            'APP_NAME'     => 'Phober',
            'APP_ENV'      => 'local',
            'APP_DEBUG'    => 'true',

            'TELESCOPE_ENABLED' => 'true',

            'LOG_CHANNEL'              => 'stack',
            'LOG_DEPRECATIONS_CHANNEL' => null,
            'LOG_LEVEL'                => 'debug',

            'DB_SHARED_CONNECTION' => 'mysql',
            'DB_SHARED_HOST'       => 'db_mysql',
            'DB_SHARED_PORT'       => '3306',
            'DB_SHARED_DATABASE'   => 'phober_shared',
            'DB_SHARED_USERNAME'   => 'root',
            'DB_SHARED_PASSWORD'   => 'root',

            'BROADCAST_DRIVER' => 'log',
            'CACHE_DRIVER'     => 'file',
            'FILESYSTEM_DISK'  => 'local',
            'QUEUE_CONNECTION' => 'database',
            'SESSION_DRIVER'   => 'file',
            'SESSION_LIFETIME' => '120',
            'MEMCACHED_HOST'   => '127.0.0.1',

            'MAIL_MAILER'       => 'smtp',
            'MAIL_HOST'         => 'mailhog',
            'MAIL_PORT'         => 1025,
            'MAIL_USERNAME'     => null,
            'MAIL_PASSWORD'     => null,
            'MAIL_ENCRYPTION'   => null,
            'MAIL_FROM_ADDRESS' => 'hello@example.com',
            'MAIL_FROM_NAME'    => '${APP_NAME}',
        ];

        foreach ($configs as $key => $value) {
            Config::create(['key' => $key, 'value' => $value]);
        }
    }
}
