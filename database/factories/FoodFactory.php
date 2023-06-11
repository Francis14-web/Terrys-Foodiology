<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

        return [
            'owner_id' => \App\Models\Canteen::pluck('id')->random(),
            'food_name' => $faker->foodName(),
            'food_description' => $this->faker->text,
            'food_image' => 'photos/no-image.png',
            'food_price' => $this->faker->numberBetween(1, 300),
            'food_stock' => $this->faker->numberBetween(1, 20),
            'food_category' => $this->faker->randomElement(['Rice Meal', 'Pasta', 'Snacks', 'Coffee', 'Drinks', 'Dessert']),
            'food_rating' => 0,
            'is_restocked_everyday' => $this->faker->boolean,
        ];
    }
}
