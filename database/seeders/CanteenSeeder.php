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
            'username' => 'Terry\'s Foodiology',
            'email' => 'terry.canteen@gmail.com',
            'password' => bcrypt('password'),
            'profile_image' => 'https://picsum.photos/200/300',
        ]);
    }
}
