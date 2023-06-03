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
            'phone_number' => '09150471026',
            'role' => 'Student',
            'password' => bcrypt('password'),
            'profile_image' => '/photos/no-avatar.png',  
            'account_verified' => true,
        ]);

        \App\Models\User::create([
            'firstname' => 'Dummy',
            'lastname' => 'Terry',
            'username' => 'terry2',
            'email' => 'terry.user2@gmail.com',
            'phone_number' => '09150471026',
            'role' => 'Student',
            'password' => bcrypt('password'),
            'profile_image' => '/photos/no-avatar.png',
            'account_verified' => true,
        ]);

        \App\Models\User::create([
            'firstname' => 'Walk In',
            'lastname' => 'Order',
            'username' => 'walkInOrder',
            'email' => 'walkInOrder@terrys.live',
            'role' => 'Student',
            'password' => bcrypt('password'),
            'profile_image' => '/photos/no-avatar.png',
            'account_verified' => true,
        ]);
    }
}
