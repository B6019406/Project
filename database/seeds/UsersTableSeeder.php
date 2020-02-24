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
        DB::table('users')->insert([
            'name' => 'Matilda',
            'email' => 'mbrantzen0@tripod.com',
            'password' => bcrypt('password'),
            'password_hint' => 'Hint',
        ]);
    }
}
