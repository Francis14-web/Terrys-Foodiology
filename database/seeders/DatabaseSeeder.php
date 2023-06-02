<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Canteen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            CanteenSeeder::class,
            FoodSeeder::class,
        ]);

        // Insert operation hour data
        DB::table('operation_hour')->insert([
            'opening_time' => '08:00:00',
            'closing_time' => '17:00:00',
        ]);
    }
}
