<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Computer Science',
                'code' => 'CS',
                'description' => 'Department of Computer Science and Information Technology',
            ],
            [
                'name' => 'Electrical Engineering',
                'code' => 'EE',
                'description' => 'Department of Electrical and Electronic Engineering',
            ],
            [
                'name' => 'Mechanical Engineering',
                'code' => 'ME',
                'description' => 'Department of Mechanical Engineering',
            ],
            [
                'name' => 'Business Administration',
                'code' => 'BA',
                'description' => 'Department of Business Administration and Management',
            ],
            [
                'name' => 'Mathematics',
                'code' => 'MATH',
                'description' => 'Department of Mathematics and Statistics',
            ],
            [
                'name' => 'Physics',
                'code' => 'PHY',
                'description' => 'Department of Physics and Applied Sciences',
            ],
            [
                'name' => 'Chemistry',
                'code' => 'CHEM',
                'description' => 'Department of Chemistry and Chemical Engineering',
            ],
            [
                'name' => 'English Literature',
                'code' => 'ENG',
                'description' => 'Department of English Literature and Language',
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
