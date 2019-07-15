<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder {
  public function run() {
    $role_manager  = Role::where('name', 'admin')->first();
    $role_employee = Role::where('name', 'public')->first();

    $employee = new User();
    $employee->name = 'Diego';
    $employee->email = 'diego@test.fr';
    $employee->password = bcrypt('@*influence4You#');
    $employee->save();
    $employee->roles()->attach($role_employee);

    $manager = new User();
    $manager->name = 'Admin';
    $manager->email = 'contact@admin.com';
    $manager->password = bcrypt('adminPassword');
    $manager->save();
    $manager->roles()->attach($role_manager);
  }
}