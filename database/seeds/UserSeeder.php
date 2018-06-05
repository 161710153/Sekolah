<?php

use Illuminate\Database\Seeder;

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

        //membuat role member
        $adminRole = new member();
        $adminRole->name = "member";
        $adminRole->display_name = "member";
        $adminRole->save();

        //membuat sample admin
        $admin = new user ();
        $admin->name = "admin";
        $admin->email = "admin@gmail.com";
        $admin->paswoard = "bcrypt('rahasia')";
        $admin->save();
        $admin->attachRole('$adminRole');

        //membuat sample member
        $member = new user ();
        $member->name = "member";
        $member->email = "member@gmail.com";
        $member->paswoard = "bcrypt('rahasia')";
        $member->save();
        $member->attachRole('$memberRole');
    }
}
