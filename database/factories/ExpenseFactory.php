<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
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
        $date = fake()->dateTimeBetween('now')->format('Y-m-d');

        return [
            'user_id' => fake()->randomElement($userIds),
            'category_id' => fake()->randomElement($categoryIds),
            'date' => $date,
            'value' => fake()->randomFloat(2, 1, 1000),
            'expense_description' => fake()->sentence,
        ];
    }
}
