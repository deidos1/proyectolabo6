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
            'password'=>bcrypt('123'),
            'docIdentidad'=>'12345678'
        ]);
    }
}
