<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $customers = [
            ['id' => '1', 'first_name' => 'Neha', 'last_name' => 'Considine', 'birthday' => '2022-02-10 04:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '50', 'note' => null, 'created_at' => '2024-10-12 06:19:57.0', 'updated_at' => '2024-10-12 06:19:57.0', 'status' => 'PENDING'],
            ['id' => '2', 'first_name' => 'Nettie', 'last_name' => 'Beier', 'birthday' => '1989-08-04 05:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '14', 'note' => null, 'created_at' => '2024-10-12 06:19:57.0', 'updated_at' => '2024-10-12 06:19:57.0', 'status' => 'APPROVED'],
            ['id' => '3', 'first_name' => 'Charity', 'last_name' => 'Mitchell', 'birthday' => '2005-08-04 05:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '86', 'note' => null, 'created_at' => '2024-10-12 06:19:57.0', 'updated_at' => '2024-10-12 06:19:57.0', 'status' => 'BLACKLIST'],
            ['id' => '4', 'first_name' => 'Ali', 'last_name' => 'Lynch', 'birthday' => '2002-02-15 04:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '30', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'BLACKLIST'],
            ['id' => '5', 'first_name' => 'Jamir', 'last_name' => 'Cruickshank', 'birthday' => '2016-03-16 04:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '91', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'VIP'],
            ['id' => '6', 'first_name' => 'Ulices', 'last_name' => 'Fritsch', 'birthday' => '2008-01-05 04:00:00.0', 'gender' => 'F', 'discount' => '0', 'balance' => '83', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'PENDING'],
            ['id' => '7', 'first_name' => 'Candido', 'last_name' => 'Torphy', 'birthday' => '2009-05-20 05:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '38', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'APPROVED'],
            ['id' => '8', 'first_name' => 'Murphy', 'last_name' => 'Rippin', 'birthday' => '1996-01-07 04:00:00.0', 'gender' => 'F', 'discount' => '13', 'balance' => '14', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'VIP'],
            ['id' => '9', 'first_name' => 'Monserrate', 'last_name' => 'Wiegand', 'birthday' => '1994-11-23 04:00:00.0', 'gender' => 'F', 'discount' => '0', 'balance' => '83', 'note' => 'com.intellij.database.remote.jdbc.LobInfo$ClobInfo@7aa1e30e', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'APPROVED'],
            ['id' => '10', 'first_name' => 'Justus', 'last_name' => 'Hoeger', 'birthday' => '1993-12-17 04:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '47', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'PENDING'],
            ['id' => '11', 'first_name' => 'Hanna', 'last_name' => 'Kris', 'birthday' => '2010-11-19 04:00:00.0', 'gender' => 'F', 'discount' => '0', 'balance' => '6', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'BLACKLIST'],
            ['id' => '12', 'first_name' => 'Ima', 'last_name' => 'Ryan', 'birthday' => '2013-09-29 05:00:00.0', 'gender' => 'F', 'discount' => '0', 'balance' => '76', 'note' => 'com.intellij.database.remote.jdbc.LobInfo$ClobInfo@41fba1f7', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'PENDING'],
            ['id' => '13', 'first_name' => 'Rosendo', 'last_name' => 'Hayes', 'birthday' => '1998-04-13 05:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '16', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'PENDING'],
            ['id' => '14', 'first_name' => 'Vito', 'last_name' => 'Rice', 'birthday' => '1973-12-17 04:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '41', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'APPROVED'],
            ['id' => '15', 'first_name' => 'Aaron', 'last_name' => 'Flatley', 'birthday' => '2001-05-07 05:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '12', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'BLACKLIST'],
            ['id' => '16', 'first_name' => 'Asa', 'last_name' => 'Okuneva', 'birthday' => '2012-12-20 04:00:00.0', 'gender' => 'F', 'discount' => '0', 'balance' => '9', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'APPROVED'],
            ['id' => '17', 'first_name' => 'Eldora', 'last_name' => 'Marquardt', 'birthday' => '2012-08-09 05:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '35', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'APPROVED'],
            ['id' => '18', 'first_name' => 'Afton', 'last_name' => 'Gleichner', 'birthday' => '2021-03-07 04:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '90', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:23:03.0', 'status' => 'APPROVED'],
            ['id' => '22', 'first_name' => 'Arden', 'last_name' => 'Abbott', 'birthday' => '1999-01-28 00:00:00.0', 'gender' => 'F', 'discount' => '0', 'balance' => '45', 'note' => null, 'created_at' => '2024-11-25 08:29:13.0', 'updated_at' => '2024-11-25 08:36:29.0', 'status' => 'PENDING'],
            ['id' => '20', 'first_name' => 'Ransom', 'last_name' => 'Cummerata', 'birthday' => '1987-01-25 04:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '93', 'note' => null, 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0', 'status' => 'BLACKLIST'],
            ['id' => '19', 'first_name' => 'Brady', 'last_name' => 'Ratke', 'birthday' => '2000-12-15 00:00:00.0', 'gender' => 'M', 'discount' => '0', 'balance' => '80', 'note' => null, 'created_at' => '2024-11-25 08:25:39.0', 'updated_at' => '2024-11-25 08:25:39.0', 'status' => 'PENDING'],
            ['id' => '23', 'first_name' => 'asd', 'last_name' => 'ads', 'birthday' => '2025-02-08 04:00:00.0', 'gender' => 'F', 'discount' => '0', 'balance' => '0', 'note' => null, 'created_at' => '2025-02-11 05:40:24.0', 'updated_at' => '2025-02-11 05:40:24.0', 'status' => 'APPROVED'],
        ];

        $contacts = [
            ['id' => '1', 'customer_id' => '1', 'value' => 'roberta.weber@heathcote.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '2', 'customer_id' => '1', 'value' => 'uhahn', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '3', 'customer_id' => '2', 'value' => 'vidal.olson', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '4', 'customer_id' => '2', 'value' => '+14344130382', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '5', 'customer_id' => '2', 'value' => '+12512693824', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '6', 'customer_id' => '3', 'value' => 'jasmin68', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '7', 'customer_id' => '4', 'value' => '+15419524344', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '8', 'customer_id' => '5', 'value' => '+17795941634', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '9', 'customer_id' => '6', 'value' => 'uconsidine', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '10', 'customer_id' => '7', 'value' => '+19316836468', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '11', 'customer_id' => '7', 'value' => 'tod91@nicolas.org', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '12', 'customer_id' => '7', 'value' => 'rosalyn61', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '13', 'customer_id' => '8', 'value' => 'nschulist', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '14', 'customer_id' => '8', 'value' => '+16517565900', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '15', 'customer_id' => '9', 'value' => 'gorczany.jacklyn', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '16', 'customer_id' => '9', 'value' => 'rosanna.rogahn', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '17', 'customer_id' => '10', 'value' => 'schowalter.alaina@yahoo.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '18', 'customer_id' => '10', 'value' => 'raheem.berge', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '19', 'customer_id' => '11', 'value' => 'corbin44@hotmail.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '20', 'customer_id' => '11', 'value' => 'daniel.terrill', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '21', 'customer_id' => '11', 'value' => '+18503271467', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '22', 'customer_id' => '12', 'value' => '+16789529462', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '23', 'customer_id' => '12', 'value' => 'ahayes', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '24', 'customer_id' => '13', 'value' => 'demetris.weissnat', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '25', 'customer_id' => '13', 'value' => 'dtillman@gmail.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '26', 'customer_id' => '14', 'value' => 'sporer.emery', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '27', 'customer_id' => '14', 'value' => 'eleonore.kautzer@gmail.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '28', 'customer_id' => '14', 'value' => 'isom.luettgen@gmail.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '29', 'customer_id' => '15', 'value' => 'garfield.becker@crona.org', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '30', 'customer_id' => '15', 'value' => 'maggie.shanahan@yahoo.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '31', 'customer_id' => '16', 'value' => 'dolores.strosin', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '32', 'customer_id' => '16', 'value' => '+15312539687', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '33', 'customer_id' => '16', 'value' => 'romaguera.eino@gmail.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '34', 'customer_id' => '17', 'value' => 'andy.konopelski', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '35', 'customer_id' => '17', 'value' => '+16508225157', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '36', 'customer_id' => '18', 'value' => 'oconner.regan@gmail.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '37', 'customer_id' => '19', 'value' => '+13869476311', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '38', 'customer_id' => '20', 'value' => '+19036559176', 'type' => 'PHONE', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '39', 'customer_id' => '20', 'value' => 'adams.kip', 'type' => 'TELEGRAM', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
            ['id' => '40', 'customer_id' => '20', 'value' => 'kaitlin.franecki@bartoletti.com', 'type' => 'EMAIL', 'created_at' => '2024-10-12 06:19:58.0', 'updated_at' => '2024-10-12 06:19:58.0'],
        ];

        DB::connection('db_crm')->table('customers')->insert($customers);
        DB::connection('db_crm')->table('contacts')->insert($contacts);
    }
}
