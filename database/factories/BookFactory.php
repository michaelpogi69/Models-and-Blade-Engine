<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'isbn' => fake()->unique()->isbn13(),
            'title' => fake()->sentence(3),
            'author' => fake()->name(),
            'description' => fake()->paragraph(3),
            'date_published' => fake()->date(),
        ];
    }
}
