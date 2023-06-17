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
        {
        DB::table('users')->insert([
            'name' => 'Shama',
            'email' => 'shama.ss242@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);
    }
    }
}
