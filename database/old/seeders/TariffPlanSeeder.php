<?php

namespace Database\Seeders;

use App\Models\TariffPlan;
use Illuminate\Database\Seeder;
use Phobiavr\PhoberLaravelCommon\Enums\DeviceEnum;
use Phobiavr\PhoberLaravelCommon\Enums\SessionTariffEnum;
use Phobiavr\PhoberLaravelCommon\Enums\SessionTimeEnum;

class TariffPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_15, 'price' => 10, 'device' => DeviceEnum::HTC]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_30, 'price' => 15, 'device' => DeviceEnum::HTC]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_60, 'price' => 25, 'device' => DeviceEnum::HTC]);

        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_15, 'price' => 15, 'device' => DeviceEnum::HTC]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_30, 'price' => 27, 'device' => DeviceEnum::HTC]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_60, 'price' => 45, 'device' => DeviceEnum::HTC]);



        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_15, 'price' => 10, 'device' => DeviceEnum::OCULUS]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_30, 'price' => 15, 'device' => DeviceEnum::OCULUS]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_60, 'price' => 25, 'device' => DeviceEnum::OCULUS]);

        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_15, 'price' => 15, 'device' => DeviceEnum::OCULUS]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_30, 'price' => 27, 'device' => DeviceEnum::OCULUS]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_60, 'price' => 45, 'device' => DeviceEnum::OCULUS]);



        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_15, 'price' => 10, 'device' => DeviceEnum::PS_VR]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_30, 'price' => 15, 'device' => DeviceEnum::PS_VR]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_60, 'price' => 25, 'device' => DeviceEnum::PS_VR]);

        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_15, 'price' => 15, 'device' => DeviceEnum::PS_VR]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_30, 'price' => 27, 'device' => DeviceEnum::PS_VR]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_60, 'price' => 45, 'device' => DeviceEnum::PS_VR]);



        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_15, 'price' => 10, 'device' => DeviceEnum::OMNI]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_30, 'price' => 15, 'device' => DeviceEnum::OMNI]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_60, 'price' => 25, 'device' => DeviceEnum::OMNI]);

        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_15, 'price' => 15, 'device' => DeviceEnum::OMNI]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_30, 'price' => 27, 'device' => DeviceEnum::OMNI]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_60, 'price' => 45, 'device' => DeviceEnum::OMNI]);



        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_15, 'price' => 10, 'device' => DeviceEnum::DOF_3]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_30, 'price' => 15, 'device' => DeviceEnum::DOF_3]);
        TariffPlan::create(['tariff' => SessionTariffEnum::MORNING, 'time' => SessionTimeEnum::MIN_60, 'price' => 25, 'device' => DeviceEnum::DOF_3]);

        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_15, 'price' => 15, 'device' => DeviceEnum::DOF_3]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_30, 'price' => 27, 'device' => DeviceEnum::DOF_3]);
        TariffPlan::create(['tariff' => SessionTariffEnum::EVENING, 'time' => SessionTimeEnum::MIN_60, 'price' => 45, 'device' => DeviceEnum::DOF_3]);
    }
}
