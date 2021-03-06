<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        //membuat sample admin
        $admin = new user();
        $admin->name = "admin";
        $admin->email = "nabatour@gmail.com";
        $admin->password =bcrypt('nabatour');
        $admin->save();
        $admin->attachRole($adminRole);

    }
}
