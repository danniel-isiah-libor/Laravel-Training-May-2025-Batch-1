<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkExperience>
 */
class WorkExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = fake()->dateTimeBetween('-5 years', 'now');
        $end = fake()->dateTimeBetween($start, '+2 years');
        return [
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
            'company_name' => fake()->company(),
            'start_date' => $start->format('Y-m-d'),
            'end_date' => $end->format('Y-m-d'),
            'tenure' => fake()->numberBetween(1, 10),
            'role' => fake()->jobTitle(),
            'location' => fake()->city(),
        ];
    }
}
