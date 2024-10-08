<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            "username"   => "admin",
            "first_name" => "Hikmat",
            "last_name"  => "Abdukhaligov",
            "email"      => "admin@site.com",
            "password"   => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y'
        ]);

        User::create([
            "username" => "manager",
            "email"    => "manager@site.com",
            "password" => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y'
        ]);

        User::create([
            "username" => "cashier",
            "email"    => "cashier@site.com",
            "password" => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y'
        ]);

        User::create([
            "username" => "member",
            "email"    => "member@site.com",
            "password" => '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y'
        ]);

//        Permission::create(['name' => 'access_to_adminpanel']);
//        Permission::create(['name' => 'manage_sessions']);
//        Permission::create(['name' => 'manage_sessions']);
//
//        Role::create(['name' => 'Admin'])->syncPermissions(['access_to_adminpanel', 'manage_sessions']);
//        Role::create(['name' => 'Manager'])->syncPermissions(['access_to_adminpanel', 'manage_sessions']);
//        Role::create(['name' => 'Cashier'])->syncPermissions(['manage_sessions']);
//        Role::create(['name' => 'Staff']);
    }
}
