<?php

namespace Database\Seeders;

use App\Models\TariffPlan;
use Illuminate\Database\Seeder;
use App\Enums\DeviceEnum;
use App\Enums\SessionTariffEnum;
use App\Enums\SessionTimeEnum;
use Illuminate\Support\Facades\DB;

class TariffPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tariffPlans = [
            ['id' => '1', 'tariff' => 'MORNING', 'time' => 'MIN_15', 'price' => '10.0', 'device' => 'HTC', 'created_at' => '2025-07-16 23:50:49.0', 'updated_at' => '2025-07-16 23:50:49.0'],
            ['id' => '2', 'tariff' => 'MORNING', 'time' => 'MIN_30', 'price' => '15.0', 'device' => 'HTC', 'created_at' => '2025-07-16 23:50:49.0', 'updated_at' => '2025-07-16 23:50:49.0'],
            ['id' => '3', 'tariff' => 'MORNING', 'time' => 'MIN_60', 'price' => '25.0', 'device' => 'HTC', 'created_at' => '2025-07-16 23:50:49.0', 'updated_at' => '2025-07-16 23:50:49.0'],
            ['id' => '4', 'tariff' => 'EVENING', 'time' => 'MIN_15', 'price' => '15.0', 'device' => 'HTC', 'created_at' => '2025-07-16 23:50:50.0', 'updated_at' => '2025-07-16 23:50:50.0'],
            ['id' => '5', 'tariff' => 'EVENING', 'time' => 'MIN_30', 'price' => '27.0', 'device' => 'HTC', 'created_at' => '2025-07-16 23:50:50.0', 'updated_at' => '2025-07-16 23:50:50.0'],
            ['id' => '6', 'tariff' => 'EVENING', 'time' => 'MIN_60', 'price' => '45.0', 'device' => 'HTC', 'created_at' => '2025-07-16 23:50:50.0', 'updated_at' => '2025-07-16 23:50:50.0'],
            ['id' => '7', 'tariff' => 'MORNING', 'time' => 'MIN_15', 'price' => '10.0', 'device' => 'OCULUS', 'created_at' => '2025-07-16 23:50:50.0', 'updated_at' => '2025-07-16 23:50:50.0'],
            ['id' => '8', 'tariff' => 'MORNING', 'time' => 'MIN_30', 'price' => '15.0', 'device' => 'OCULUS', 'created_at' => '2025-07-16 23:50:50.0', 'updated_at' => '2025-07-16 23:50:50.0'],
            ['id' => '9', 'tariff' => 'MORNING', 'time' => 'MIN_60', 'price' => '25.0', 'device' => 'OCULUS', 'created_at' => '2025-07-16 23:50:51.0', 'updated_at' => '2025-07-16 23:50:51.0'],
            ['id' => '10', 'tariff' => 'EVENING', 'time' => 'MIN_15', 'price' => '15.0', 'device' => 'OCULUS', 'created_at' => '2025-07-16 23:50:51.0', 'updated_at' => '2025-07-16 23:50:51.0'],
            ['id' => '11', 'tariff' => 'EVENING', 'time' => 'MIN_30', 'price' => '27.0', 'device' => 'OCULUS', 'created_at' => '2025-07-16 23:50:51.0', 'updated_at' => '2025-07-16 23:50:51.0'],
            ['id' => '12', 'tariff' => 'EVENING', 'time' => 'MIN_60', 'price' => '45.0', 'device' => 'OCULUS', 'created_at' => '2025-07-16 23:50:51.0', 'updated_at' => '2025-07-16 23:50:51.0'],
            ['id' => '13', 'tariff' => 'MORNING', 'time' => 'MIN_15', 'price' => '10.0', 'device' => 'PS_VR', 'created_at' => '2025-07-16 23:50:51.0', 'updated_at' => '2025-07-16 23:50:51.0'],
            ['id' => '14', 'tariff' => 'MORNING', 'time' => 'MIN_30', 'price' => '15.0', 'device' => 'PS_VR', 'created_at' => '2025-07-16 23:50:51.0', 'updated_at' => '2025-07-16 23:50:51.0'],
            ['id' => '15', 'tariff' => 'MORNING', 'time' => 'MIN_60', 'price' => '25.0', 'device' => 'PS_VR', 'created_at' => '2025-07-16 23:50:52.0', 'updated_at' => '2025-07-16 23:50:52.0'],
            ['id' => '16', 'tariff' => 'EVENING', 'time' => 'MIN_15', 'price' => '15.0', 'device' => 'PS_VR', 'created_at' => '2025-07-16 23:50:52.0', 'updated_at' => '2025-07-16 23:50:52.0'],
            ['id' => '17', 'tariff' => 'EVENING', 'time' => 'MIN_30', 'price' => '27.0', 'device' => 'PS_VR', 'created_at' => '2025-07-16 23:50:52.0', 'updated_at' => '2025-07-16 23:50:52.0'],
            ['id' => '18', 'tariff' => 'EVENING', 'time' => 'MIN_60', 'price' => '45.0', 'device' => 'PS_VR', 'created_at' => '2025-07-16 23:50:52.0', 'updated_at' => '2025-07-16 23:50:52.0'],
            ['id' => '19', 'tariff' => 'MORNING', 'time' => 'MIN_15', 'price' => '10.0', 'device' => 'OMNI', 'created_at' => '2025-07-16 23:50:52.0', 'updated_at' => '2025-07-16 23:50:52.0'],
            ['id' => '20', 'tariff' => 'MORNING', 'time' => 'MIN_30', 'price' => '15.0', 'device' => 'OMNI', 'created_at' => '2025-07-16 23:50:52.0', 'updated_at' => '2025-07-16 23:50:52.0'],
            ['id' => '21', 'tariff' => 'MORNING', 'time' => 'MIN_60', 'price' => '25.0', 'device' => 'OMNI', 'created_at' => '2025-07-16 23:50:53.0', 'updated_at' => '2025-07-16 23:50:53.0'],
            ['id' => '22', 'tariff' => 'EVENING', 'time' => 'MIN_15', 'price' => '15.0', 'device' => 'OMNI', 'created_at' => '2025-07-16 23:50:53.0', 'updated_at' => '2025-07-16 23:50:53.0'],
            ['id' => '23', 'tariff' => 'EVENING', 'time' => 'MIN_30', 'price' => '27.0', 'device' => 'OMNI', 'created_at' => '2025-07-16 23:50:54.0', 'updated_at' => '2025-07-16 23:50:54.0'],
            ['id' => '24', 'tariff' => 'EVENING', 'time' => 'MIN_60', 'price' => '45.0', 'device' => 'OMNI', 'created_at' => '2025-07-16 23:50:54.0', 'updated_at' => '2025-07-16 23:50:54.0'],
            ['id' => '25', 'tariff' => 'MORNING', 'time' => 'MIN_15', 'price' => '10.0', 'device' => 'DOF_3', 'created_at' => '2025-07-16 23:50:54.0', 'updated_at' => '2025-07-16 23:50:54.0'],
            ['id' => '26', 'tariff' => 'MORNING', 'time' => 'MIN_30', 'price' => '15.0', 'device' => 'DOF_3', 'created_at' => '2025-07-16 23:50:55.0', 'updated_at' => '2025-07-16 23:50:55.0'],
            ['id' => '27', 'tariff' => 'MORNING', 'time' => 'MIN_60', 'price' => '25.0', 'device' => 'DOF_3', 'created_at' => '2025-07-16 23:50:55.0', 'updated_at' => '2025-07-16 23:50:55.0'],
            ['id' => '28', 'tariff' => 'EVENING', 'time' => 'MIN_15', 'price' => '15.0', 'device' => 'DOF_3', 'created_at' => '2025-07-16 23:50:55.0', 'updated_at' => '2025-07-16 23:50:55.0'],
            ['id' => '29', 'tariff' => 'EVENING', 'time' => 'MIN_30', 'price' => '27.0', 'device' => 'DOF_3', 'created_at' => '2025-07-16 23:50:55.0', 'updated_at' => '2025-07-16 23:50:55.0'],
            ['id' => '30', 'tariff' => 'EVENING', 'time' => 'MIN_60', 'price' => '45.0', 'device' => 'DOF_3', 'created_at' => '2025-07-16 23:50:55.0', 'updated_at' => '2025-07-16 23:50:55.0'],
        ];

        DB::connection('db_device')->table("tariff_plans")->insert($tariffPlans);
    }
}
