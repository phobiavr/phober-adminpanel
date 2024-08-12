<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //TODO:: switch to factory

        $now = new DateTime();
        $devices = array(
            array(
                'name'        => 'HTC Vive', 'slug' => 'htc-vive',
                'description' => '{"en":"With HTC Vive, upgrades the feelings of real world. Evaluate the new reality, play your favorite games on a completely different level and experience incredible emotions. Do not miss this opportunity!","ru":"С HTC Vive реальный мир уступает место фантастическим ощущениям. Оцени новую реальность, играй любимые игры на совершенно другом уровне и испытай невероятные эмоции. Не упусти такую возможность!","az":"HTC Vive cihazı eynək və kontrollerlərinin hər tərəfli izlənmə sistemi, realistik qrafika, istiqamətlənmiş səs və ultra dəqiq əks əlaqə sayəsində ən dərin və canlı virtual reallıq səyahətini təmin edir!"}',
                'updated_at'  => $now, 'created_at' => $now
            ),
            array(
                'name'        => 'Oculus Rift', 'slug' => 'oculus-rift',
                'description' => '{"en":"Oculus presents a radically new vision of the digital world. Give freedom to your imagination. Dive into the world of games, watch movies with the effect of presence, travel in time and terrain!","ru":"Oculus представляет радикально новое видение цифрового мира. Дай волю воображению. Погрузись в мир игр, смотри фильмы с эффектом присутствия, путешествуй во времени и местности!","az":"Oculus Rift cihazı keyfiyyətli qrafika, oyun zamanı kontrollerlərin 360°-li imkanları, görüntü dəqiqliyi və ən rahat touchpad\'ları ilə seçilir."}',
                'updated_at'  => $now, 'created_at' => $now
            ),
            array(
                'name'        => 'PlayStation VR', 'slug' => 'ps-vr',
                'description' => '{"en":"Explore stunning new worlds! Feel yourself in the center of the virtual universe and try the whole new way of gaming with the PlayStation VR. Everything is possible in our virtual reality center!","ru": "Погрузись в потрясающие новые миры, ощути себя в центре игровой вселенной и попробуй новый способ игры с PlayStation VR. С нами возможно все!", "az": "PlayStation VR qrafikanın zirvələrini fəth etməkdədir. Burda hər şey fikirləşdiyinizdən daha realdır. PS VR ilə oyuna tamamilə qərq olun və oyunu canlı olaraq hiss edin!"}',
                'updated_at'  => $now, 'created_at' => $now
            ),
            array(
                'name'        => 'Omni Virtuix', 'slug' => 'omni-virtuix',
                'description' => '{"en":"Omni Virtuix is presented in our center for the first time in Baku! Virtuix Omni VR treadmill, gives you an opportunity toplay games such as Counter Strike, Far Cry, GTA with the real in game presence effect. Running, driving, shooting and etc are available in this Virtual Reality. You are the hero of the game.","ru":"Omni Virtuix - первая подвижная платформа виртуальной реальности. Предоставляющая такие функции, как свободное движение в 360º, высококачественная графика и стерео звук, платформа впервые в Баку представлена в центре Phobia VR.","az":"Omni Virtuix - ilk hərəkət edən virtual reallıq platformasıdır. Bundan əlavə 360º sərbəst hərəkət, yüksək keyfiyyətli qrafika və stereo səsi ilə fərqlənən bu cihaz Bakıda ilk dəfə Phobia VR mərkəzində təqdim olunur."}',
                'updated_at'  => $now, 'created_at' => $now
            ),
            array(
                'name'        => '3DOF', 'slug' => '3-dof',
                'description' => '{"en":"3DOF racing simulator is a French designed and constructed compact motion rig. Let’s see how much immersion this motion rig adds to my VR racing!","ru":"3DOF - симулятор гоночного автомобиля на гидравлике с самой реалистичной графикой. Отличающееся особым комфортом, устройство дает возможность испытать самые новые и популярные гоночные игры в виртуальной реальности.","az":"3DOF - canlı qrafika və hidravlika ilə təchiz olunmuş avtomobil simulyatorudur. Rahatlığı ilə seçilən bu cihaz üzərində siz ən yeni və məhşur yarış oyunlarını virtual reallıqda sınaya biləcəksiniz."}',
                'updated_at'  => $now, 'created_at' => $now
            ),
        );

        DB::connection('db_device')->table("devices")->insert($devices);
    }
}
