<?php

use Illuminate\Database\Seeder;

class CreateUsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = "admin";
        $user->date_of_birth = "1992/03/03";
        $user->salary = "1";
        $user->role = "admin";
        $user->save();

        $user = new \App\User();
        $user->name = "user";
        $user->email = "user@gmail.com";
        $user->password = "user";
        $user->date_of_birth = "1992/01/01";
        $user->salary = "1";
        $user->role = "user";
        $user->save();


    }
}
