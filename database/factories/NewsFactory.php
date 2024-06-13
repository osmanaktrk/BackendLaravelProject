<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $covers = [
            'https://ichef.bbci.co.uk/news/1536/cpsprodpb/fa03/live/feee5060-28d9-11ef-8c04-d9cb3ea38c14.png.webp',
            'https://ichef.bbci.co.uk/news/1536/cpsprodpb/76a9/live/916ee850-27ea-11ef-a13a-0b8c563da930.jpg.webp',
            'https://ichef.bbci.co.uk/news/1536/cpsprodpb/ea0b/live/0422b480-293a-11ef-98de-d7e44bcb3f0f.jpg.webp',
            'https://ichef.bbci.co.uk/news/1536/cpsprodpb/4554/live/12bc4980-291b-11ef-a08a-0dd98a792d5e.jpg.webp',
            'https://ichef.bbci.co.uk/news/1536/cpsprodpb/a389/live/19dee020-291a-11ef-8725-878da4c62a60.png.webp',
            'https://ichef.bbci.co.uk/news/1536/cpsprodpb/ff01/live/747e5370-2916-11ef-ae2c-87a203e6db8a.png.webp',
            'https://ichef.bbci.co.uk/news/1536/cpsprodpb/6780/live/abdea470-271b-11ef-b2a2-8dd2c3838cf1.jpg.webp'
            
        ];
        


        return [
            'user_id' => User::factory(),
            'category_id'=> Category::factory(),
            'title' => fake()->text(200),
            'cover' =>  fake()->randomElement($covers),
            // 'cover' =>  'img/news/demo.webp',
            'content' => fake()->text(1500),
            
        ];
    }



    
}
