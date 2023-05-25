<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $role = $this->faker->randomElement(['Students', 'Faculty', 'Hospital Staff', 'Visitor']);

        $attributes = [
            'firstname' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'username' => $this->faker->unique()->userName(),
            'role' => $role,
            'profile_image' => $this->faker->imageUrl(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'account_verified' => false,
        ];

        if ($role === 'Visitor') {
            $attributes['until_when'] = Carbon::now()->addWeek();
            $attributes['account_verified'] = true;
        }

        return $attributes;
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
