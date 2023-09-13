<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2,8), false),
            'user_id' => 2,
            'content' => collect(fake()->paragraphs(mt_rand(3,8)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
