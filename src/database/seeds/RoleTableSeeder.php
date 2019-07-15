<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder {

    public function run() {
        $role_employee = new Role();
        $role_employee->name = 'public';
        $role_employee->description = 'Public User';
        $role_employee->save();

        $role_manager = new Role();
        $role_manager->name = 'Admin';
        $role_manager->description = 'Admin User';
        $role_manager->save();
    }
}