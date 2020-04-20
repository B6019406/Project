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
        [
            'name' => 'Matilda',
            'email' => 'mbrantzen0@tripod.com',
            'password' => bcrypt('password'),
            'password_hint' => 'Hint',
        ],[
            'name' => 'Maddie',
            'email' => 'mcheyenne0@cargocollective.com',
            'password' => bcrypt('password123'),
            'password_hint' => 'Common',
        ],
        [
            'name' => 'Tommy',
            'email' => 'tfurmagier0@tripod.com',
            'password' => bcrypt('_v)2(3OC!7GScw7CqqpB'),
            'password_hint' => '',
        ]
        ]);
    }
}
