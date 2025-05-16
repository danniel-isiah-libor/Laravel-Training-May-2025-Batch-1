<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->has(Profile::factory())
            ->has(WorkExperience::factory())
            ->count(100)->create();
    }
}
