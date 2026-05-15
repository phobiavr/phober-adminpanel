<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => '1', 'username' => 'admin', 'first_name' => 'Hikmat', 'last_name' => 'Abdukhaligov', 'api_token' => 'V0NOOEd0aUI4M2tMd24xMGJpOWxWYm52OEdTZ3lOOVFoMUt2c0Y0bQ==', 'email' => 'admin@site.com', 'email_verified_at' => null, 'password' => '$2y$12$kuz9spUnMiq2XFVReJKPWuT.3a2b4Gaw4Al8O/33nhQNMnDkpQC5q', 'remember_token' => null, 'created_at' => '2024-10-12 06:19:57.62', 'updated_at' => '2025-07-13 01:00:01.883', 'telegram' => null, 'telegram_chat_id' => null],
            ['id' => '2', 'username' => 'admim', 'first_name' => 'admin', 'last_name' => 'admim', 'api_token' => null, 'email' => 'manager@site.com', 'email_verified_at' => null, 'password' => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', 'remember_token' => null, 'created_at' => '2024-10-12 06:19:57.653', 'updated_at' => '2024-12-14 21:35:37.0', 'telegram' => null, 'telegram_chat_id' => null],
            ['id' => '3', 'username' => 'cashier', 'first_name' => 'testaa', 'last_name' => 'testaa', 'api_token' => null, 'email' => 'cashier@site.com', 'email_verified_at' => null, 'password' => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', 'remember_token' => null, 'created_at' => '2024-10-12 06:19:57.657', 'updated_at' => '2024-12-14 21:30:12.0', 'telegram' => null, 'telegram_chat_id' => null],
            ['id' => '4', 'username' => 'member', 'first_name' => 'test', 'last_name' => 'test', 'api_token' => null, 'email' => 'member@site.com', 'email_verified_at' => null, 'password' => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', 'remember_token' => '4dt4NWgN7HO7ryHm1CGzkGMZbCcb3wAyrEYPHKxW7gN4JKH0oOFkzFEAKIq7', 'created_at' => '2024-10-12 06:19:57.663', 'updated_at' => '2024-10-12 06:19:57.663', 'telegram' => null, 'telegram_chat_id' => null],
            ['id' => '5', 'username' => 'member-2', 'first_name' => 'Saida', 'last_name' => 'Abdukhaligov', 'api_token' => 'VE1xOUJ1NTJaSm9HZ2JMcG1wZldaOGhLOGRIcjVZUnVmNldSbnBSRA==', 'email' => 'saida@site.com', 'email_verified_at' => null, 'password' => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', 'remember_token' => '4dt4NWgN7HO7ryHm1CGzkGMZbCcb3wAyrEYPHKxW7gN4JKH0oOFkzFEAKIq7', 'created_at' => '2024-10-12 06:19:57.663', 'updated_at' => '2025-06-26 18:55:20.503', 'telegram' => null, 'telegram_chat_id' => null],
            ['id' => '6', 'username' => 'member-3', 'first_name' => 'Gismat', 'last_name' => 'Abdukhaligov', 'api_token' => 'dGszYXNCdFlWbUNONjJlcTJ6cHVtYVFEZnFQZVVlNHNDbkJ4cDFobA==', 'email' => 'gismat@site.com', 'email_verified_at' => null, 'password' => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', 'remember_token' => null, 'created_at' => '2024-10-12 06:19:57.663', 'updated_at' => '2025-06-29 07:03:23.853', 'telegram' => 'abduxaligov', 'telegram_chat_id' => '897328502'],
        ];

        $permissions = [
            ['id' => '1', 'name' => 'access_to_adminpanel', 'created_at' => '2024-12-14 21:23:55.413', 'updated_at' => '2024-12-14 21:23:55.413'],
            ['id' => '2', 'name' => 'manage_sessions', 'created_at' => '2024-12-14 21:23:55.46', 'updated_at' => '2024-12-14 21:23:55.46'],
        ];

        $roles = [
            ['id' => '1', 'name' => 'Admin', 'created_at' => '2024-12-14 21:23:55.463', 'updated_at' => '2024-12-14 21:23:55.463'],
            ['id' => '2', 'name' => 'Manager', 'created_at' => '2024-12-14 21:23:55.483', 'updated_at' => '2024-12-14 21:23:55.483'],
            ['id' => '3', 'name' => 'Cashier', 'created_at' => '2024-12-14 21:23:55.49', 'updated_at' => '2024-12-14 21:23:55.49'],
            ['id' => '4', 'name' => 'Staff', 'created_at' => '2024-12-14 21:23:55.497', 'updated_at' => '2024-12-14 21:23:55.497'],
        ];

        $user_roles = [
            ['user_id' => '1', 'role_id' => '1'],
            ['user_id' => '3', 'role_id' => '2'],
            ['user_id' => '3', 'role_id' => '3'],
            ['user_id' => '3', 'role_id' => '4'],
        ];

        $user_permissions = [
            ['user_id' => '3', 'permission_id' => '1'],
            ['user_id' => '3', 'permission_id' => '2'],
        ];

        $role_permissions = [
            ['role_id' => '1', 'permission_id' => '1'],
            ['role_id' => '1', 'permission_id' => '2'],
            ['role_id' => '2', 'permission_id' => '1'],
            ['role_id' => '2', 'permission_id' => '2'],
            ['role_id' => '3', 'permission_id' => '2'],
        ];

        DB::connection('db_auth')->table("users")->insert($users);
        DB::connection('db_auth')->table("roles")->insert($roles);
        DB::connection('db_auth')->table("permissions")->insert($permissions);
        DB::connection('db_auth')->table("user_roles")->insert($user_roles);
        DB::connection('db_auth')->table("user_permissions")->insert($user_permissions);
        DB::connection('db_auth')->table("role_permissions")->insert($role_permissions);
    }
}
