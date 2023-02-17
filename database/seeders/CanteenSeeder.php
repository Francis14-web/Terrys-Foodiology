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
        \App\Models\Canteen::factory(10)->create();
        \App\Models\Canteen::create([
            'username' => 'Test Canteen',
            'email' => 'jericovic64@gmail.com',
            'password' => bcrypt('password'),
            'profile_image' => 'https://picsum.photos/200/300',
        ]);
    }
}
