<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name'=>'Admin admin admin',
            'email'=>'admin@cuscotours.com',
            'password'=>bcrypt('123456'),
            'docIdentidad'=>'123456'

        ]);
    }
}
