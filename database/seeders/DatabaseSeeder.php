<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
            UserSeeder::class,
            GameSeeder::class,
            GenreSeeder::class,
            DeviceSeeder::class,

            GameGenreSeeder::class,
            GameDeviceSeeder::class,

            CustomerSeeder::class,

            MediaSeeder::class,

            EmployeeSeeder::class,
            SnackSeeder::class,

            ConfigSeeder::class,

            TariffPlanSeeder::class
        ]);
    }
}
