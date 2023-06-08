<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'director' => $this->faker->name(),
            'image_url' => $this->faker->imageUrl(),
            'duration' => $this->faker->numberBetween(60, 300),
            'release_date' => $this->faker->date(),
            'genre' => $this->faker->word(0, 5)
        ];
    }
}
