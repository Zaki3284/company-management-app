<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use App\Models\Project;
use App\Models\Task;

class FullSeeder extends Seeder
{
    public function run(): void
    {
        // 5 Companies
        Company::factory(5)->create()->each(function ($company) {

            // Create 3 Projects per Company
            Project::factory(3)->create([
                'company_id' => $company->id,
            ])->each(function ($project) use ($company) {

                // Create 5 Employees per Company
                $employees = User::factory(5)->create([
                    'role' => 'employer',
                    'company_id' => $company->id,
                ]);

                // Create 4 Tasks per Project assigned randomly to employees
                foreach (range(1, 4) as $i) {
                    Task::factory()->create([
                        'project_id' => $project->id,
                        'employer_id' => $employees->random()->id,
                    ]);
                }
            });
        });
    }
}
