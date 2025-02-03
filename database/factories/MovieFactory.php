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
        $title = $this->faker->sentence(3, true);

        return [
            'title' => $title,
            'description' => $this->faker->paragraph,
            'release_date' => $this->faker->date,
            'duration' => $this->faker->numberBetween(90, 180),
            'language' => $this->faker->languageCode,
            'country' => $this->faker->country,
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'poster_url' => 'https://placehold.co/648x960',
            'trailer_url' => 'https://placehold.co/960x648',
        ];
    }
}
