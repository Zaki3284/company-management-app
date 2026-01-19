<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
use App\Models\User;

class TaskFactory extends Factory
{
    protected $model = \App\Models\Task::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'project_id' => Project::factory(),
            'employer_id' => User::factory()->state(['role' => 'employer']),
            'Start_Date' => $this->faker->date(),
            'End_Date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pending', 'done']),
        ];
    }
}
