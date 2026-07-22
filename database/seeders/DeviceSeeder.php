<?php

namespace Database\Seeders;

use App\Models\Device;
use App\Models\DeviceInstance;
use DateTime;
use Illuminate\Database\Seeder;
use App\Enums\DeviceEnum;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = [
            ['id' => '1', 'name' => 'HTC Vive', 'type' => 'HTC', 'slug' => 'htc-vive', 'description' => '{"en":"With HTC Vive, upgrades the feelings of real world. Evaluate the new reality, play your favorite games on a completely different level and experience incredible emotions. Do not miss this opportunity!","ru":"С HTC Vive реальный мир уступает место фантастическим ощущениям. Оцени новую реальность, играй любимые игры на совершенно другом уровне и испытай невероятные эмоции. Не упусти такую возможность!","az":"HTC Vive cihazı eynək və kontrollerlərinin hər tərəfli izlənmə sistemi, realistik qrafika, istiqamətlənmiş səs və ultra dəqiq əks əlaqə sayəsində ən dərin və canlı virtual reallıq səyahətini təmin edir!"}', 'created_at' => '2025-07-13 23:59:53.0', 'updated_at' => '2025-07-13 23:59:53.0'],
            ['id' => '2', 'name' => 'Oculus Rift', 'type' => 'OCULUS', 'slug' => 'oculus-rift', 'description' => '{"en":"Oculus presents a radically new vision of the digital world. Give freedom to your imagination. Dive into the world of games, watch movies with the effect of presence, travel in time and terrain!","ru":"Oculus представляет радикально новое видение цифрового мира. Дай волю воображению. Погрузись в мир игр, смотри фильмы с эффектом присутствия, путешествуй во времени и местности!","az":"Oculus Rift cihazı keyfiyyətli qrafika, oyun zamanı kontrollerlərin 360°-li imkanları, görüntü dəqiqliyi və ən rahat touchpad\'ları ilə seçilir."}', 'created_at' => '2025-07-13 23:59:53.0', 'updated_at' => '2025-07-13 23:59:53.0'],
            ['id' => '3', 'name' => 'PlayStation VR', 'type' => 'PS_VR', 'slug' => 'ps-vr', 'description' => '{"en":"Explore stunning new worlds! Feel yourself in the center of the virtual universe and try the whole new way of gaming with the PlayStation VR. Everything is possible in our virtual reality center!","ru": "Погрузись в потрясающие новые миры, ощути себя в центре игровой вселенной и попробуй новый способ игры с PlayStation VR. С нами возможно все!", "az": "PlayStation VR qrafikanın zirvələrini fəth etməkdədir. Burda hər şey fikirləşdiyinizdən daha realdır. PS VR ilə oyuna tamamilə qərq olun və oyunu canlı olaraq hiss edin!"}', 'created_at' => '2025-07-13 23:59:53.0', 'updated_at' => '2025-07-13 23:59:53.0'],
            ['id' => '4', 'name' => 'Omni Virtuix', 'type' => 'OMNI', 'slug' => 'omni-virtuix', 'description' => '{"en":"Omni Virtuix is presented in our center for the first time in Baku! Virtuix Omni VR treadmill, gives you an opportunity toplay games such as Counter Strike, Far Cry, GTA with the real in game presence effect. Running, driving, shooting and etc are available in this Virtual Reality. You are the hero of the game.","ru":"Omni Virtuix - первая подвижная платформа виртуальной реальности. Предоставляющая такие функции, как свободное движение в 360º, высококачественная графика и стерео звук, платформа впервые в Баку представлена в центре Phobia VR.","az":"Omni Virtuix - ilk hərəkət edən virtual reallıq platformasıdır. Bundan əlavə 360º sərbəst hərəkət, yüksək keyfiyyətli qrafika və stereo səsi ilə fərqlənən bu cihaz Bakıda ilk dəfə Phobia VR mərkəzində təqdim olunur."}', 'created_at' => '2025-07-13 23:59:53.0', 'updated_at' => '2025-07-13 23:59:53.0'],
            ['id' => '5', 'name' => '3DOF', 'type' => 'DOF_3', 'slug' => '3-dof', 'description' => '{"en":"3DOF racing simulator is a French designed and constructed compact motion rig. Let’s see how much immersion this motion rig adds to my VR racing!","ru":"3DOF - симулятор гоночного автомобиля на гидравлике с самой реалистичной графикой. Отличающееся особым комфортом, устройство дает возможность испытать самые новые и популярные гоночные игры в виртуальной реальности.","az":"3DOF - canlı qrafika və hidravlika ilə təchiz olunmuş avtomobil simulyatorudur. Rahatlığı ilə seçilən bu cihaz üzərində siz ən yeni və məhşur yarış oyunlarını virtual reallıqda sınaya biləcəksiniz."}', 'created_at' => '2025-07-13 23:59:53.0', 'updated_at' => '2025-07-13 23:59:53.0'],
        ];

        $instances = [
            ['id' => '1', 'mac_address' => '00:15:5D:00:26:BD', 'device' => 'HTC', 'active' => '1', 'created_at' => '2025-07-14 00:00:45.0', 'updated_at' => '2025-07-14 00:00:45.0'],
            ['id' => '2', 'mac_address' => 'C0:D8:9E:86:27:A7', 'device' => 'HTC', 'active' => '1', 'created_at' => '2025-07-14 00:00:45.0', 'updated_at' => '2025-07-14 00:00:45.0'],
            ['id' => '3', 'mac_address' => 'C9:94:F7:E7:72:7B', 'device' => 'HTC', 'active' => '1', 'created_at' => '2025-07-14 00:00:45.0', 'updated_at' => '2025-07-14 00:00:45.0'],
            ['id' => '4', 'mac_address' => '80:4E:1A:2D:D5:48', 'device' => 'HTC', 'active' => '1', 'created_at' => '2025-07-14 00:00:46.0', 'updated_at' => '2025-07-14 00:00:46.0'],
            ['id' => '5', 'mac_address' => 'BF:B8:D9:3C:DA:95', 'device' => 'OCULUS', 'active' => '1', 'created_at' => '2025-07-14 00:00:46.0', 'updated_at' => '2025-07-14 00:00:46.0'],
            ['id' => '6', 'mac_address' => '11:7C:21:DB:30:06', 'device' => 'OCULUS', 'active' => '1', 'created_at' => '2025-07-14 00:00:46.0', 'updated_at' => '2025-07-14 00:00:46.0'],
            ['id' => '7', 'mac_address' => 'DF:D7:EF:D4:5B:14', 'device' => 'PS_VR', 'active' => '1', 'created_at' => '2025-07-14 00:00:46.0', 'updated_at' => '2025-07-14 00:00:46.0'],
            ['id' => '8', 'mac_address' => '6B:96:88:9F:F2:4A', 'device' => 'PS_VR', 'active' => '1', 'created_at' => '2025-07-14 00:00:46.0', 'updated_at' => '2025-07-14 00:00:46.0'],
            ['id' => '9', 'mac_address' => 'AE:5C:F4:06:ED:24', 'device' => 'OMNI', 'active' => '1', 'created_at' => '2025-07-14 00:00:47.0', 'updated_at' => '2025-07-14 00:00:47.0'],
            ['id' => '10', 'mac_address' => '1D:BA:BF:C0:92:0C', 'device' => 'OMNI', 'active' => '1', 'created_at' => '2025-07-14 00:00:47.0', 'updated_at' => '2025-07-14 00:00:47.0'],
            ['id' => '11', 'mac_address' => 'B7:2E:ED:E3:E5:56', 'device' => 'OMNI', 'active' => '1', 'created_at' => '2025-07-14 00:00:47.0', 'updated_at' => '2025-07-14 00:00:47.0'],
            ['id' => '12', 'mac_address' => 'AE:77:7C:ED:94:70', 'device' => 'OMNI', 'active' => '1', 'created_at' => '2025-07-14 00:00:47.0', 'updated_at' => '2025-07-14 00:00:47.0'],
            ['id' => '13', 'mac_address' => 'F2:B0:CB:DE:F7:2C', 'device' => 'DOF_3', 'active' => '1', 'created_at' => '2025-07-14 00:00:47.0', 'updated_at' => '2025-07-14 00:00:47.0'],
            ['id' => '14', 'mac_address' => 'AB:B0:F8:BF:9C:47', 'device' => 'DOF_3', 'active' => '1', 'created_at' => '2025-07-14 00:00:47.0', 'updated_at' => '2025-07-14 00:00:47.0'],
            ['id' => '15', 'mac_address' => '50:35:92:12:1E:F4', 'device' => 'DOF_3', 'active' => '1', 'created_at' => '2025-07-14 00:00:48.0', 'updated_at' => '2025-07-14 00:00:48.0'],
            ['id' => '16', 'mac_address' => 'EA:ED:AF:19:F7:37', 'device' => 'DOF_3', 'active' => '1', 'created_at' => '2025-07-14 00:00:48.0', 'updated_at' => '2025-07-14 00:00:48.0'],
        ];

        Device::insert($devices);
        DeviceInstance::insert($instances);
    }
}
