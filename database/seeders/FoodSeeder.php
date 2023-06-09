<?php

namespace Database\Seeders;

use App\Models\Canteen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Canteen::where('email', "terry.canteen@gmail.com")->first();

        // \App\Models\Food::factory()->count(20)->create();
        // UP

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Rice with egg',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Tapsilog',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/tapa.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Spamsilog',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/spam.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Baconsilog',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/bacon.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Longsilog',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/longsilog.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Burger Steak',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/burger-steak.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Sisig',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/sisig.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Pork Abodo',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/Pork-Adobo.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Abodo flakes',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/adobo flakes.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Sweet and Sour Fish',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/sweetsour.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Beef and mushroom',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/beefmushroom.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Chickensilog',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/chicken.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Hungariansilog',
            'food_description' => '',
            'food_image' => 'photos/Rice Meal/hungarian.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Rice Meal',
            'food_rating' => 0
        ]);

        // Pasta
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Spaghetti',
            'food_description' => '',
            'food_image' => 'photos/Pasta/SPAGHETTI.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Pasta',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Bacon Carbonara',
            'food_description' => '',
            'food_image' => 'photos/Pasta/Carbonara.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Pasta',
            'food_rating' => 0
        ]);

        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Tuna Carbonara',
            'food_description' => '',
            'food_image' => 'photos/Pasta/Carbonara.jpg',
            'food_price' => 100,
            'food_stock' => 0,
            'food_category' => 'Pasta',
            'food_rating' => 0
        ]);

        // Snacks
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Cheese Stick',
            'food_description' => '',
            'food_image' => 'photos/Snacks/cheese-sticks.jpg',
            'food_price' => 30,
            'food_stock' => 0,
            'food_category' => 'Snacks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Siomai',
            'food_description' => '',
            'food_image' => 'photos/Snacks/siomai_1.jpg',
            'food_price' => 35,
            'food_stock' => 0,
            'food_category' => 'Snacks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Lumpiang togue',
            'food_description' => '',
            'food_image' => 'photos/Snacks/lupiangtogue.jpg',
            'food_price' => 30,
            'food_stock' => 0,
            'food_category' => 'Snacks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Burger',
            'food_description' => '',
            'food_image' => 'photos/Snacks/burget (2).jpeg',
            'food_price' => 40,
            'food_stock' => 0,
            'food_category' => 'Snacks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Cheese Burger',
            'food_description' => '',
            'food_image' => 'photos/Snacks/burger.jpg',
            'food_price' => 50,
            'food_stock' => 0,
            'food_category' => 'Snacks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Hotdog on stick',
            'food_description' => '',
            'food_image' => 'photos/Snacks/hotgodonstick.jpg',
            'food_price' => 35,
            'food_stock' => 0,
            'food_category' => 'Snacks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Hotdog on sandwich',
            'food_description' => '',
            'food_image' => 'photos/Snacks/hotdogonsandwich.jpg',
            'food_price' => 50,
            'food_stock' => 0,
            'food_category' => 'Snacks',
            'food_rating' => 0
        ]);

        // Coffee
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Americano',
            'food_description' => '',
            'food_image' => 'photos/Coffee/americano.jpg',
            'food_price' => 70,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'White',
            'food_description' => '',
            'food_image' => 'photos/Coffee/white-mocha.jpg',
            'food_price' => 75,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Mocha',
            'food_description' => '',
            'food_image' => 'photos/Coffee/mocha.jpg',
            'food_price' => 85,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Caramel',
            'food_description' => '',
            'food_image' => 'photos/Coffee/caramel.jpg',
            'food_price' => 85,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Vanilla',
            'food_description' => '',
            'food_image' => 'photos/Coffee/vanilla.jpg',
            'food_price' => 85,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Hazelnut',
            'food_description' => '',
            'food_image' => 'photos/Coffee/hazelnut.jpg',
            'food_price' => 85,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Caramel Macchiato',
            'food_description' => '',
            'food_image' => 'photos/Coffee/caramelmacch.jpg',
            'food_price' => 90,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'White Mocha',
            'food_description' => '',
            'food_image' => 'photos/Coffee/white-mocha.jpg',
            'food_price' => 90,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Choco',
            'food_description' => '',
            'food_image' => 'photos/Coffee/choco.jpg',
            'food_price' => 80,
            'food_stock' => 0,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Sola',
            'food_description' => '',
            'food_image' => 'photos/Drinks/sola.jpg',
            'food_price' => 60,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'C2 355ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/c2.jpg',
            'food_price' => 30,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'C2 500ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/c2.jpg',
            'food_price' => 45,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Coke 290ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/coke.jpg',
            'food_price' => 25,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Mountain Dew 290ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/mountaindew.jpg',
            'food_price' => 25,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Sprite 290ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/sprite.jpg',
            'food_price' => 25,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Royal 290ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/royal.jpg',
            'food_price' => 25,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Zesto Apple Big250',
            'food_description' => '',
            'food_image' => 'photos/Drinks/zestoApple.jpg',
            'food_price' => 15,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Zesto Mango Big250',
            'food_description' => '',
            'food_image' => 'photos/Drinks/zestoMango.jpg',
            'food_price' => 15,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Zesto Orange Big250',
            'food_description' => '',
            'food_image' => 'photos/Drinks/zestoOrange.jpg',
            'food_price' => 15,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Nature Spring Water 350ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/water.jpg',
            'food_price' => 15,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Nature Spring Water 1000ml',
            'food_description' => '',
            'food_image' => 'photos/Drinks/water.jpg',
            'food_price' => 38,
            'food_stock' => 0,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
            
        // Desserts
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Turon',
            'food_description' => '',
            'food_image' => 'photos/Dessert/turon.jpg',
            'food_price' => 30,
            'food_stock' => 0,
            'food_category' => 'Dessert',
            'food_rating' => 0
            ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Banana Q',
            'food_description' => '',
            'food_image' => 'photos/Dessert/bananaq.jpg',
            'food_price' => 30,
            'food_stock' => 0,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Scramble Strawberry',
            'food_description' => '',
            'food_image' => 'photos/Dessert/strawberry.jpg',
            'food_price' => 40,
            'food_stock' => 0,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Scramble Chocolate',
            'food_description' => '',
            'food_image' => 'photos/Dessert/choco.jpg',
            'food_price' => 40,
            'food_stock' => 0,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);
            
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => 'Scramble Pandan',
            'food_description' => '',
            'food_image' => 'photos/Dessert/pandan.jpg',
            'food_price' => 40,
            'food_stock' => 0,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);

    }
}
