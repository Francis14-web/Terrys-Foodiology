<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(20)->create();
        \App\Models\User::create([
            'firstname' => 'Terry',
            'lastname' => 'Dummy',
            'username' => 'terry1',
            'email' => 'terry.user@gmail.com',
            'role' => 'Student',
            'password' => bcrypt('password'),
            'profile_image' => 'https://picsum.photos/200/300',
            'account_verified' => true,
        ]);

        \App\Models\User::create([
            'firstname' => 'Dummy',
            'lastname' => 'Terry',
            'username' => 'terry2',
            'email' => 'terry.user2@gmail.com',
            'role' => 'Student',
            'password' => bcrypt('password'),
            'profile_image' => 'https://picsum.photos/200/300',
            'account_verified' => true,
        ]);
    }
}
