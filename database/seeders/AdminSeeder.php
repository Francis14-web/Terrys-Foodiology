<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::create([
            'display_name' => 'System Admin',
            'email' => 'admin@admin.com',
            'phone_number' => '09150471026',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'profile_image' => '/photos/no-avatar.png',
        ]);
    }
}
