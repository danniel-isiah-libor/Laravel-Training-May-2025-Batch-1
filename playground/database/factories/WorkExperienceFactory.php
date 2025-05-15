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
            'start_date' => fake()->date('Y-m-d', '2020-01-01'),
            'end_date' => function (array $attributes) {
                return fake()->date('Y-m-d', $attributes['start_date']);
            },
            'role' => fake()->jobTitle(),
        ];
    }
}
