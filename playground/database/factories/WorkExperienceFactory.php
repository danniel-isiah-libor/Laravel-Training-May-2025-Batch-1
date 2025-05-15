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
        return [
            'user_id' => User::factory(),
            'company_name' => fake()->company(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'tenure' => fake()->numberBetween(1, 10),
            'role' => fake()->jobTitle(),
            'location' => fake()->city(),
        ];
    }
}
