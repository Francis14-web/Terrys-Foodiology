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

        \App\Models\Food::factory()->count(20)->create();
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Americano",
            'food_description' => 'It\'s one of the most popular and straightforward coffee drinks to order when you\'re looking for a quick caffeine fix with just the right consistency.',
            'food_image' => 'photos/Coffee/americano.jpg',
            'food_price' => 70,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Caramel Macchiato",
            'food_description' => 'A classic and time-honored dark roast with notes of molasses and caramelized sugar that\'s perfect for making classic espresso drinks.',
            'food_image' => 'photos/Coffee/caramelmacch.jpg',
            'food_price' => 90,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);
        
        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Caramel",
            'food_description' => 'It is a delicious drink made with a shot of espresso, chocolate syrup, and steamed milk.',
            'food_image' => 'photos/Coffee/caramel.jpg',
            'food_price' => 85,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Choco",
            'food_description' => 'A hot beverage, which is a perfect blend of coffee powder, chocolate, milk and water.',
            'food_image' => 'photos/Coffee/choco.jpg',
            'food_price' => 80,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Hazelnut",
            'food_description' => 'It\'s a healthy and delicious drink created by adding hazelnuts or syrup to the coffee beans of your choice.',
            'food_image' => 'photos/Coffee/hazelnut.jpg',
            'food_price' => 85,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Mocha",
            'food_description' => 'A type of good quality coffee that is made from a specific coffee bean.',
            'food_image' => 'photos/Coffee/mocha.jpg',
            'food_price' => 85,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Vanilla",
            'food_description' => 'A coffee that is either flavored using vanilla syrup or creamer or made with vanilla-infused ground coffee, coffee pods, or instant coffee mix.',
            'food_image' => 'photos/Coffee/vanilla.jpg',
            'food_price' => 85,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "White",
            'food_description' => 'A coffee that is either flavored using French vanilla syrup or creamer or made with French-vanilla-infused ground coffee, coffee pods, or instant coffee mix.',
            'food_image' => 'photos/Coffee/white.jpg',
            'food_price' => 75,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "White Mocha",
            'food_description' => 'A coffee drink made out of an espresso shot, hot milk, and white chocolate syrup.',
            'food_image' => 'photos/Coffee/white-mocha.jpg',
            'food_price' => 90,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "White Mocha",
            'food_description' => 'A coffee drink made out of an espresso shot, hot milk, and white chocolate syrup.',
            'food_image' => 'photos/Coffee/white-mocha.jpg',
            'food_price' => 90,
            'food_stock' => 5,
            'food_category' => 'Coffee',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "BananaQue",
            'food_description' => 'A simply fried bananas cooked with brown sugar until caramelized and then skewered onto bamboo sticks.',
            'food_image' => 'photos/Dessert/bananaq.jpg',
            'food_price' => 30,
            'food_stock' => 5,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Scramble Chocolate",
            'food_description' => 'Ice scramble or Iskrambol is a local frozen streetside treat made of choco-flavored shaved ice mixed with milk.',
            'food_image' => 'photos/Dessert/choco.jpg',
            'food_price' => 40,
            'food_stock' => 5,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Scramble Buko Pandan",
            'food_description' => 'A delicious Filipino dessert perfect for anyone with a sweet tooth. Its unique flavor and vibrant color make it stand out from other desserts.',
            'food_image' => 'photos/Dessert/pandan.jpg',
            'food_price' => 40,
            'food_stock' => 5,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Scramble Strawberry",
            'food_description' => 'A local frozen streetside treat made of strawberry-flavored shaved ice mixed with milk.',
            'food_image' => 'photos/Dessert/strawberry.jpg',
            'food_price' => 40,
            'food_stock' => 5,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Turon",
            'food_description' => 'A popular Filipino snack consisting of a banana wrapped in a deep-fried spring roll wrapper, usually coated with caramelized sugar.',
            'food_image' => 'photos/Dessert/turon.jpg',
            'food_price' => 30,
            'food_stock' => 5,
            'food_category' => 'Dessert',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "C2 (355ml)",
            'food_description' => 'A ready-to-drink green tea-based beverages that is brewed from fresh natural green tea leaves of Camellia sinensi.',
            'food_image' => 'photos/Drinks/c2.jpg',
            'food_price' => 30,
            'food_stock' => 5,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "C2 (500ml)",
            'food_description' => 'A ready-to-drink green tea-based beverages that is brewed from fresh natural green tea leaves of Camellia sinensi.',
            'food_image' => 'photos/Drinks/c2.jpg',
            'food_price' => 45,
            'food_stock' => 5,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Coca Cola (290ml)",
            'food_description' => 'The taste of Coca-Cola is often described as refreshing, crisp, and satisfying.',
            'food_image' => 'photos/Drinks/coke.jpg',
            'food_price' => 25,
            'food_stock' => 5,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Mountain Dew (290ml)",
            'food_description' => 'A unique and distinctive combination of citrus flavors with a sweet and slightly tangy profile.',
            'food_image' => 'photos/Drinks/mountaindew.jpg',
            'food_price' => 25,
            'food_stock' => 5,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);

        \App\Models\Food::factory()->create([
            'owner_id' => $user->id,
            'food_name' => "Royal (290ml)",
            'food_description' => 'Royal drinks often emphasize the use of high-quality,  ensures a distinctive taste and an elevated drinking experience.',
            'food_image' => 'photos/Drinks/Royal.jpg',
            'food_price' => 25,
            'food_stock' => 5,
            'food_category' => 'Drinks',
            'food_rating' => 0
        ]);
    }
}
