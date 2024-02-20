<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->text('30');
        
        return [
            'name' => $name,
            'writer_id' => rand(1,5),
            'slug' => Str::slug($name),
            'intro' => fake()->paragraph(),
            'content' => fake()->paragraph(),
            'photo' => fake()->imageUrl,
        ];
    }
}
