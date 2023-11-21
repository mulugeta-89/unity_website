<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            "description" => $this->faker->paragraph(5),
            'start_date' => $this->faker->dateTimeBetween('+1 week', '+2 months'),
            'end_date' => $this->faker->dateTimeBetween('+2 months', '+3 months'),
            'location_name' => $this->faker->word,
        ];
    }
}
