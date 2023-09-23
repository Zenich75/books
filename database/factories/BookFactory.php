<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => fake()->randomElement(Author::all())['id'],
            'title' => fake()->sentence(6),
            'price' => fake()->randomFloat(2, 1, 99999),
            'isbn' => fake()->numberBetween(1111111111111, 9999999999999),
            'published_at' => fake()->date(),
        ];
    }
}
