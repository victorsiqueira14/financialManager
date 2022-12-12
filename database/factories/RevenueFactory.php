<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Revenue>
 */
class RevenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIds = User::all()->pluck('id');
        $categoryIds = Category::all()->pluck('id');

        return [
            'user_id' => fake()->randomElement($userIds),
            'category_id' => fake()->randomElement($categoryIds),
            'date' => fake()->dateTimeBetween('now')->format('Y-m-d'),
            'revenue_description' => fake()->sentence,
            'value' => fake()->randomFloat(2, 1, 1000),
        ];
    }
}
