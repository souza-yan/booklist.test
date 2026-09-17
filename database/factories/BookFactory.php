<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // aqui vc define as regras das quais a factory usara para preencher os dados sejam eles gerados aleatoriamente ou inseridos por vc
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'genre_id' => \App\Models\Genre::factory(),
            'published_year' => $this->faker->year(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
