<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MediaSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $now = new DateTime();

        $media = array(
            array(
                'id'                    => '1104', 'model_type' => 'device-game', 'model_id' => '1',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'batman-arkham',
                'file_name'             => 'batman-1.png', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1105', 'model_type' => 'device-game', 'model_id' => '2',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'arizona-sunshine',
                'file_name'             => 'youtube-video-cover-1.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1106', 'model_type' => 'device-game', 'model_id' => '3',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'theblu',
                'file_name'             => 'theblu-1-1.png', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1108', 'model_type' => 'device-game', 'model_id' => '4',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'superhot',
                'file_name'             => 'superhot-1.png', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1109', 'model_type' => 'device-game', 'model_id' => '5',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'serious-sam-fusion-2017', 'file_name' => 'siruis-sam.png',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1110', 'model_type' => 'device-game', 'model_id' => '7',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'google-earth-vr', 'file_name' => 'google-earth.png',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1111', 'model_type' => 'device-game', 'model_id' => '8',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'gnomes-goblins',
                'file_name'             => 'gnomes-and-goblins.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1113', 'model_type' => 'device-game', 'model_id' => '9',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'tilt-brush',
                'file_name'             => 'tilt-brush.png', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1115', 'model_type' => 'device-game', 'model_id' => '10',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'a-escape-vr',
                'file_name'             => 'a-escape-vr.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1116', 'model_type' => 'device-game', 'model_id' => '11',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'fruit-ninja-vr',
                'file_name'             => 'fruit-ninja.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1117', 'model_type' => 'device-game', 'model_id' => '6',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'a-lost-room',
                'file_name'             => 'a-lost-room.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1118', 'model_type' => 'device-game', 'model_id' => '12',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'paranormal-activity-the-lost-soul',
                'file_name'             => 'paranormal-activity.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1119', 'model_type' => 'device-game', 'model_id' => '13',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'raw-data',
                'file_name'             => 'raw-data.png', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1120', 'model_type' => 'device-game', 'model_id' => '14',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'the-lab',
                'file_name'             => 'the-lab.png', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1121', 'model_type' => 'device-game', 'model_id' => '15',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-belko-experiment',
                'file_name'             => 'the-belko-experiment.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1122', 'model_type' => 'device-game', 'model_id' => '16',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'vr-funhouse',
                'file_name'             => 'vr-funhouse.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1123', 'model_type' => 'device-game', 'model_id' => '17',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'locked-in-vr',
                'file_name'             => 'locked-in-vr.png', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1124', 'model_type' => 'device-game', 'model_id' => '18',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'fancy-skiing-vr', 'file_name' => 'fancy-skiing-vr.png',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1156', 'model_type' => 'device-game', 'model_id' => '19',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'affected-the-manor', 'file_name' => 'affected.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1157', 'model_type' => 'device-game', 'model_id' => '20',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'apollo-11',
                'file_name'             => 'apollo.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1159', 'model_type' => 'device-game', 'model_id' => '21',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'araya',
                'file_name'             => 'araya.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1162', 'model_type' => 'device-game', 'model_id' => '22',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'archangel',
                'file_name'             => 'archangel.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1163', 'model_type' => 'device-game', 'model_id' => '23',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'the-assembly',
                'file_name'             => 'the_assembly.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1165', 'model_type' => 'device-game', 'model_id' => '24',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'audioshield',
                'file_name'             => 'audioshield.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1168', 'model_type' => 'device-game', 'model_id' => '25',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'bartender-vr-simulator', 'file_name' => 'bartender.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1169', 'model_type' => 'device-game', 'model_id' => '26',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'bloody-zombies',
                'file_name'             => 'bloode_zombie.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1170', 'model_type' => 'device-game', 'model_id' => '27',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'battlezone',
                'file_name'             => 'battlezone.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1171', 'model_type' => 'device-game', 'model_id' => '28',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'blue-effect',
                'file_name'             => 'blue_effect.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1172', 'model_type' => 'device-game', 'model_id' => '29',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'bowslinger',
                'file_name'             => 'bowslinger.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1173', 'model_type' => 'device-game', 'model_id' => '30',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'boxvr',
                'file_name'             => 'boxvr.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1174', 'model_type' => 'device-game', 'model_id' => '31',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-brookhaven-experiment',
                'file_name'             => 'the_brookhaven_experimentt-1_0x260.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1175', 'model_type' => 'device-game', 'model_id' => '32',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'a-chair-in-a-room-greenwater', 'file_name' => 'a_chair.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1176', 'model_type' => 'device-game', 'model_id' => '33',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'chess-ultra',
                'file_name'             => 'chess_ultra.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1177', 'model_type' => 'device-game', 'model_id' => '34',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'climbey',
                'file_name'             => 'climbey.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1178', 'model_type' => 'device-game', 'model_id' => '35',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'dead-hungry',
                'file_name'             => 'dead_hungry.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1179', 'model_type' => 'device-game', 'model_id' => '36',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'dead-secret',
                'file_name'             => 'dead_secret.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1180', 'model_type' => 'device-game', 'model_id' => '37',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'dont-knock-twice', 'file_name' => 'dont_knock_twice.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1181', 'model_type' => 'device-game', 'model_id' => '38',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'dont-let-go',
                'file_name'             => 'dont_et_go.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1182', 'model_type' => 'device-game', 'model_id' => '39',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'dota-2',
                'file_name'             => 'dota2.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1183', 'model_type' => 'device-game', 'model_id' => '40',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'duck-season',
                'file_name'             => 'duck_season.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1184', 'model_type' => 'device-game', 'model_id' => '41',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'eleven-table-tennis-vr', 'file_name' => 'eleven_table.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1185', 'model_type' => 'device-game', 'model_id' => '42',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'emily-wants-to-play', 'file_name' => 'emily.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1186', 'model_type' => 'device-game', 'model_id' => '43',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'escape-bloody-mary', 'file_name' => 'escape_bloody.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1187', 'model_type' => 'device-game', 'model_id' => '44',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'everest-vr',
                'file_name'             => 'everest_vr.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1188', 'model_type' => 'device-game', 'model_id' => '45',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'fast-action-hero', 'file_name' => 'fast_action_hero.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1189', 'model_type' => 'device-game', 'model_id' => '46',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'final-soccer-vr', 'file_name' => 'final_soccer_vr.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1190', 'model_type' => 'device-game', 'model_id' => '47',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'first-person-tennis',
                'file_name'             => 'first_person_tennis.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1191', 'model_type' => 'device-game', 'model_id' => '48',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'form',
                'file_name'             => 'form.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1193', 'model_type' => 'device-game', 'model_id' => '49',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-gallery-episode-1',
                'file_name'             => 'the_gallery_episode_1.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1194', 'model_type' => 'device-game', 'model_id' => '50',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-gallery-episode-2',
                'file_name'             => 'the_gallery_episode_2_0x260.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1195', 'model_type' => 'device-game', 'model_id' => '51',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-gleam-vr-escape-the-room',
                'file_name'             => 'the_gleam_vr_escape_the_room_0x260.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1196', 'model_type' => 'device-game', 'model_id' => '52',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'gorn',
                'file_name'             => 'gorn_0x260.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1197', 'model_type' => 'device-game', 'model_id' => '53',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'gun-club-vr',
                'file_name'             => 'gun_club_vr_0x260.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1198', 'model_type' => 'device-game', 'model_id' => '54',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'gunheart',
                'file_name'             => 'gunheart.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1199', 'model_type' => 'device-game', 'model_id' => '55',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'i-expect-you-to-die',
                'file_name'             => 'i_expect_you_to_die.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1200', 'model_type' => 'device-game', 'model_id' => '56',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'ironwolf-vr',
                'file_name'             => 'iron_wolf.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1201', 'model_type' => 'device-game', 'model_id' => '57',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'island-359',
                'file_name'             => 'island_359.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1202', 'model_type' => 'device-game', 'model_id' => '58',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'job-simulator',
                'file_name'             => 'job_simulator.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1203', 'model_type' => 'device-game', 'model_id' => '59',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'killing-floor',
                'file_name'             => 'killing_floor.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1204', 'model_type' => 'device-game', 'model_id' => '60',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'la-peri',
                'file_name'             => 'la_peri.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1205', 'model_type' => 'device-game', 'model_id' => '61',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'music-inside',
                'file_name'             => 'music_inside.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1206', 'model_type' => 'device-game', 'model_id' => '62',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'narcosis',
                'file_name'             => 'narcosis.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1207', 'model_type' => 'device-game', 'model_id' => '63',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'nba-2kvr-experience',
                'file_name'             => 'nba_2kvr_experience.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1208', 'model_type' => 'device-game', 'model_id' => '64',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'neurowake',
                'file_name'             => 'neurowake.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1209', 'model_type' => 'device-game', 'model_id' => '65',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'obduction',
                'file_name'             => 'obduction.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1210', 'model_type' => 'device-game', 'model_id' => '66',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'obscura',
                'file_name'             => 'obscura.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1212', 'model_type' => 'device-game', 'model_id' => '67',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'ocean-rift',
                'file_name'             => 'ocean_rift.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1213', 'model_type' => 'device-game', 'model_id' => '68',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'ok-bob',
                'file_name'             => 'ok_bob.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1214', 'model_type' => 'device-game', 'model_id' => '69',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'onward',
                'file_name'             => 'onward.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1215', 'model_type' => 'device-game', 'model_id' => '70',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'overkill-vr',
                'file_name'             => 'overkill_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1216', 'model_type' => 'device-game', 'model_id' => '71',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'pavlov-vr',
                'file_name'             => 'pavlov_vr.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1217', 'model_type' => 'device-game', 'model_id' => '72',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'rise-of-insanity', 'file_name' => 'rise_of_insanity.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1218', 'model_type' => 'device-game', 'model_id' => '73',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'robinson-the-journey',
                'file_name'             => 'robinson_the_journey.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1219', 'model_type' => 'device-game', 'model_id' => '74',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'sairento-vr',
                'file_name'             => 'sairento_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1221', 'model_type' => 'device-game', 'model_id' => '75',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'show-must-go-on', 'file_name' => 'show_must_go_onpsd.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1222', 'model_type' => 'device-game', 'model_id' => '76',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-solus-project', 'file_name' => 'the_solus_project.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1223', 'model_type' => 'device-game', 'model_id' => '77',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'space-bit-attack', 'file_name' => 'space_bit_attack.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1224', 'model_type' => 'device-game', 'model_id' => '78',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'sparc',
                'file_name'             => 'sparc.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1225', 'model_type' => 'device-game', 'model_id' => '79',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'sportsbar-vr',
                'file_name'             => 'sportsbar_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1226', 'model_type' => 'device-game', 'model_id' => '80',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'super-vr-trainer', 'file_name' => 'super_vr_trainer.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1228', 'model_type' => 'device-game', 'model_id' => '81',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'surgeon-simulator', 'file_name' => 'surgeon_simulator.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1229', 'model_type' => 'device-game', 'model_id' => '82',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'svrvive-the-deus-helix',
                'file_name'             => 'svrvive_the_deus_helix-1.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1230', 'model_type' => 'device-game', 'model_id' => '83',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-talos-principle-vr',
                'file_name'             => 'the_talos_principle_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1231', 'model_type' => 'device-game', 'model_id' => '84',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'tethered',
                'file_name'             => 'tethered.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1232', 'model_type' => 'device-game', 'model_id' => '85',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-thrill-of-the-fight',
                'file_name'             => 'the_thrill_of_the_fight.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1233', 'model_type' => 'device-game', 'model_id' => '86',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'time-machine-vr', 'file_name' => 'time_machine_vr.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1234', 'model_type' => 'device-game', 'model_id' => '87',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'toon-ocean-vr',
                'file_name'             => 'toon_ocean_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1235', 'model_type' => 'device-game', 'model_id' => '88',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'tornuffalo',
                'file_name'             => 'tornuffalo.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1236', 'model_type' => 'device-game', 'model_id' => '89',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-vanishing-of-ethan-carter',
                'file_name'             => 'the_vanishing_of_ethan.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1237', 'model_type' => 'device-game', 'model_id' => '90',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'vr-varcale-the-room', 'file_name' => 'vacate.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1238', 'model_type' => 'device-game', 'model_id' => '91',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'the-wizards',
                'file_name'             => 'the_wizards.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1239', 'model_type' => 'device-game', 'model_id' => '92',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'zombie-training-simulator',
                'file_name'             => 'zombie_training.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1240', 'model_type' => 'device-game', 'model_id' => '93',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'zomday',
                'file_name'             => 'zomday.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1241', 'model_type' => 'device-game', 'model_id' => '94',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'just-in-time-incorporated',
                'file_name'             => 'just_in_time_incorporated.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1242', 'model_type' => 'device-game', 'model_id' => '95',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'homebound',
                'file_name'             => 'homebound.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1243', 'model_type' => 'device-game', 'model_id' => '96',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'high-noon-vr',
                'file_name'             => 'high_noon_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1244', 'model_type' => 'device-game', 'model_id' => '97',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'henry-the-hamster-handler',
                'file_name'             => 'henry_the_hamster.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1245', 'model_type' => 'device-game', 'model_id' => '98',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'gunship-battle-2-vr',
                'file_name'             => 'gunship_battle_2_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1246', 'model_type' => 'device-game', 'model_id' => '99',
                'uuid'                  => Str::uuid(), 'collection_name' => 'preview', 'name' => 'vr-golf-online',
                'file_name'             => 'vr_golf_online.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1247', 'model_type' => 'device-game',
                'model_id'              => '100', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'vr-invaders', 'file_name' => 'vr_invaders.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1248', 'model_type' => 'device-game',
                'model_id'              => '101', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'space-pirate-trainer',
                'file_name'             => 'space_pirate_trainer.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1249', 'model_type' => 'device-game',
                'model_id'              => '102', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'rick-and-morty',
                'file_name'             => 'rick_morty_virtual_rickality.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1250', 'model_type' => 'device-game',
                'model_id'              => '103', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'protonwar', 'file_name' => 'proton_war.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1251', 'model_type' => 'device-game',
                'model_id'              => '104', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'primal-carnage', 'file_name' => 'primal_carnage.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1252', 'model_type' => 'device-game',
                'model_id'              => '105', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'legendary-hunter-v',
                'file_name'             => 'legendary_hunter_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1253', 'model_type' => 'device-game',
                'model_id'              => '106', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'gunss-stories-bulletprof-vr',
                'file_name'             => 'guns_stories_bulletproof_vr.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1254', 'model_type' => 'device-game',
                'model_id'              => '107', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'ghost-town-mine-ride-shootin-gallery',
                'file_name'             => 'ghost_town_mine_ride_shooting_gallery.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1255', 'model_type' => 'device-game',
                'model_id'              => '108', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'a-fear-of-heights-and-other-things',
                'file_name'             => 'a_fear.jpg', 'mime_type' => 'image/jpeg', 'disk' => 'media',
                'conversions_disk'      => 'media', 'size' => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1256', 'model_type' => 'device-game',
                'model_id'              => '109', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'exorcist-legion-vr', 'file_name' => 'exorcist_legion_vr.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1257', 'model_type' => 'device-game',
                'model_id'              => '110', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'fated-the-silent-oath',
                'file_name'             => 'fated_the_silent_oath.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1258', 'model_type' => 'device-game',
                'model_id'              => '111', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'eve-valkyrie-warzone', 'file_name' => 'eve.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1259', 'model_type' => 'device-game',
                'model_id'              => '112', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'eagle-flight', 'file_name' => 'eagle.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1260', 'model_type' => 'device-game',
                'model_id'              => '113', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'drunk-of-dead', 'file_name' => 'drunk_or_dead.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1261', 'model_type' => 'device-game',
                'model_id'              => '114', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'dream-coaster-vr', 'file_name' => 'dream_coaster_vr.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1262', 'model_type' => 'device-game',
                'model_id'              => '115', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'dreadhalls', 'file_name' => 'dreadhalls.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1263', 'model_type' => 'device-game',
                'model_id'              => '116', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'downward-spiral-prologue', 'file_name' => 'downward.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1264', 'model_type' => 'device-game',
                'model_id'              => '117', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'bullet-sorrow-vr', 'file_name' => 'bullet_sorrow.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1265', 'model_type' => 'device-game',
                'model_id'              => '118', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'alice-vr', 'file_name' => 'alice.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1266', 'model_type' => 'device-game',
                'model_id'              => '119', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'adr1ft', 'file_name' => 'adr1ft.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1267', 'model_type' => 'device-game',
                'model_id'              => '120', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'arktika-1', 'file_name' => 'arktika_1.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1268', 'model_type' => 'device-game',
                'model_id'              => '121', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'blade-runner-2049', 'file_name' => 'blade.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1269', 'model_type' => 'device-game',
                'model_id'              => '122', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'blocks', 'file_name' => 'blocks.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1270', 'model_type' => 'device-game',
                'model_id'              => '123', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'coco-vr', 'file_name' => 'coco.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1271', 'model_type' => 'device-game',
                'model_id'              => '124', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'dead-and-buried', 'file_name' => 'dead_and_buried.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1272', 'model_type' => 'device-game',
                'model_id'              => '125', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'echo-arena', 'file_name' => 'echo_arena.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1273', 'model_type' => 'device-game',
                'model_id'              => '126', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'edge-of-nowhere', 'file_name' => 'edge_of_nowhere.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1274', 'model_type' => 'device-game',
                'model_id'              => '127', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'face-your-fears', 'file_name' => 'face_your_fears.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1275', 'model_type' => 'device-game',
                'model_id'              => '128', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'final-goalie-football-simulator',
                'file_name'             => 'final_golie.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1276', 'model_type' => 'device-game',
                'model_id'              => '129', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'killing-floor-incursion', 'file_name' => 'killing_floor.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1277', 'model_type' => 'device-game',
                'model_id'              => '130', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'luckys-tale', 'file_name' => 'luckys_tale.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1278', 'model_type' => 'device-game',
                'model_id'              => '131', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'minecraft', 'file_name' => 'minecraft.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1279', 'model_type' => 'device-game',
                'model_id'              => '132', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'ripcoil', 'file_name' => 'ripcoil.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1280', 'model_type' => 'device-game',
                'model_id'              => '133', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'robo-recall', 'file_name' => 'robo_recall.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1281', 'model_type' => 'device-game',
                'model_id'              => '134', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'rock-band-vr', 'file_name' => 'rock_band_vr.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1282', 'model_type' => 'device-game',
                'model_id'              => '135', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-climb', 'file_name' => 'the_climb.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1283', 'model_type' => 'device-game',
                'model_id'              => '136', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'the-unspoken', 'file_name' => 'the_unspoken.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1284', 'model_type' => 'device-game',
                'model_id'              => '137', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'vr-sports-challenge',
                'file_name'             => 'vr_sports_challenge-1.jpg', 'mime_type' => 'image/jpeg',
                'disk'                  => 'media', 'conversions_disk' => 'media', 'size' => '178469',
                'manipulations'         => '[]', 'custom_properties' => '[]',
                'responsive_images'     => '[]', 'order_column' => '1',
                'created_at'            => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1285', 'model_type' => 'device-game',
                'model_id'              => '138', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'wilson-heart', 'file_name' => 'wilsons_heart.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1286', 'model_type' => 'device-game',
                'model_id'              => '139', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'dreamdeck', 'file_name' => 'dreamdeck.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1287', 'model_type' => 'device-game',
                'model_id'              => '140', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'asseto-corsa', 'file_name' => 'assetto.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1288', 'model_type' => 'device-game',
                'model_id'              => '141', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'dirt-rally', 'file_name' => 'dirt_rally.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            ),
            array(
                'id'                    => '1289', 'model_type' => 'device-game',
                'model_id'              => '142', 'uuid' => Str::uuid(), 'collection_name' => 'preview',
                'name'                  => 'project-cars2', 'file_name' => 'project_cars2.jpg',
                'mime_type'             => 'image/jpeg', 'disk' => 'media', 'conversions_disk' => 'media',
                'size'                  => '178469', 'manipulations' => '[]',
                'custom_properties'     => '[]', 'responsive_images' => '[]',
                'order_column'          => '1', 'created_at' => $now, 'updated_at' => $now,
                'generated_conversions' => '[]'
            )
        );

        DB::connection('db_shared')->table("media")->insert($media);
    }
}
