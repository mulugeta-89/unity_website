<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            //
            "title" => $this->faker->sentence,
            "content" => $this->faker->paragraph(10),
            'publish_date' => $this->faker->dateTimeBetween('+1 week', '+2 months'),
        ];
    }
}