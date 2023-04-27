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
        \App\Models\User::factory()->create();
        \App\Models\User::create([
            'firstname' => 'Test',
            'lastname' => 'User',
            'username' => 'dormammu',
            'email' => 'jericovic64@gmail.com',
            'role' => 'Student',
            'password' => bcrypt('password'),
            'profile_image' => 'https://picsum.photos/200/300',
        ]);

    }
}
