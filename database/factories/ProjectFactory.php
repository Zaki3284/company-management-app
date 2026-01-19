<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'company_id' => Company::factory(),
        'name' => $this->faker->sentence(3),
        'description' => $this->faker->paragraph(),
        'deadline' => $this->faker->date(),
        ];
    }
}
