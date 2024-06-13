<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\LaravelData\Attributes\Validation\Between;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FaqCategory>
 */
class FaqCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->unique()->randomElement(['Register', 'News', 'General', 'Comment', 'Contact', 'FAQ', 'Profile']),
        ];
    }
}
