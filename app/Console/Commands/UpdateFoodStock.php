<?php

namespace App\Console\Commands;

use App\Models\Food;
use Illuminate\Console\Command;

class UpdateFoodStock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-food-stock';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Retrieve all food records
        $foods = Food::where('is_restocked_everyday', true)->get();

        // Update the stock of each food to 0
        foreach ($foods as $food) {
            $food->stock = 0;
            $food->save();
        }

        $this->info('Food stock updated successfully.');
    }

}
