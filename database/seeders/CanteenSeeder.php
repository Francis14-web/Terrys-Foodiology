<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CanteenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Canteen::create([
            'id' => '99626032-c82b-4755-a9a5-228103ce5c3e',
            'display_name' => 'Terry\'s Foodiology',
            'username' => 'terrysfoodiology',
            'email' => 'terry.canteen@gmail.com',
            'phone_number' => '09150471026',
            'password' => bcrypt('password'),
            'profile_image' => '/photos/no-avatar.png',
        ]);
    }
}
