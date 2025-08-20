<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            // Computer Science Courses
            [
                'course_title' => 'Introduction to Programming',
                'credit_hours' => 3,
                'description' => 'Basic programming concepts using Python',
                'department_code' => 'CS',
            ],
            [
                'course_title' => 'Data Structures and Algorithms',
                'credit_hours' => 4,
                'description' => 'Advanced programming concepts and algorithm design',
                'department_code' => 'CS',
            ],
            [
                'course_title' => 'Database Management Systems',
                'credit_hours' => 3,
                'description' => 'SQL, database design, and management',
                'department_code' => 'CS',
            ],
            [
                'course_title' => 'Web Development',
                'credit_hours' => 3,
                'description' => 'HTML, CSS, JavaScript, and modern web frameworks',
                'department_code' => 'CS',
            ],
            [
                'course_title' => 'Software Engineering',
                'credit_hours' => 4,
                'description' => 'Software development methodologies and practices',
                'department_code' => 'CS',
            ],

            // Electrical Engineering Courses
            [
                'course_title' => 'Circuit Analysis',
                'credit_hours' => 4,
                'description' => 'Basic electrical circuit theory and analysis',
                'department_code' => 'EE',
            ],
            [
                'course_title' => 'Digital Electronics',
                'credit_hours' => 3,
                'description' => 'Digital logic design and implementation',
                'department_code' => 'EE',
            ],
            [
                'course_title' => 'Electromagnetic Theory',
                'credit_hours' => 4,
                'description' => 'Electromagnetic fields and wave propagation',
                'department_code' => 'EE',
            ],

            // Mechanical Engineering Courses
            [
                'course_title' => 'Engineering Mechanics',
                'credit_hours' => 4,
                'description' => 'Statics and dynamics of mechanical systems',
                'department_code' => 'ME',
            ],
            [
                'course_title' => 'Thermodynamics',
                'credit_hours' => 3,
                'description' => 'Heat transfer and energy conversion',
                'department_code' => 'ME',
            ],
            [
                'course_title' => 'Machine Design',
                'credit_hours' => 4,
                'description' => 'Design principles for mechanical components',
                'department_code' => 'ME',
            ],

            // Business Administration Courses
            [
                'course_title' => 'Principles of Management',
                'credit_hours' => 3,
                'description' => 'Basic management concepts and practices',
                'department_code' => 'BA',
            ],
            [
                'course_title' => 'Financial Accounting',
                'credit_hours' => 3,
                'description' => 'Accounting principles and financial reporting',
                'department_code' => 'BA',
            ],
            [
                'course_title' => 'Marketing Management',
                'credit_hours' => 3,
                'description' => 'Marketing strategies and consumer behavior',
                'department_code' => 'BA',
            ],

            // Mathematics Courses
            [
                'course_title' => 'Calculus I',
                'credit_hours' => 4,
                'description' => 'Differential calculus and applications',
                'department_code' => 'MATH',
            ],
            [
                'course_title' => 'Linear Algebra',
                'credit_hours' => 3,
                'description' => 'Vector spaces, matrices, and linear transformations',
                'department_code' => 'MATH',
            ],
            [
                'course_title' => 'Probability and Statistics',
                'credit_hours' => 3,
                'description' => 'Statistical methods and probability theory',
                'department_code' => 'MATH',
            ],

            // Physics Courses
            [
                'course_title' => 'General Physics I',
                'credit_hours' => 4,
                'description' => 'Mechanics, heat, and thermodynamics',
                'department_code' => 'PHY',
            ],
            [
                'course_title' => 'General Physics II',
                'credit_hours' => 4,
                'description' => 'Electricity, magnetism, and optics',
                'department_code' => 'PHY',
            ],

            // Chemistry Courses
            [
                'course_title' => 'General Chemistry I',
                'credit_hours' => 4,
                'description' => 'Atomic structure, bonding, and reactions',
                'department_code' => 'CHEM',
            ],
            [
                'course_title' => 'Organic Chemistry',
                'credit_hours' => 4,
                'description' => 'Carbon compounds and organic reactions',
                'department_code' => 'CHEM',
            ],

            // English Literature Courses
            [
                'course_title' => 'Introduction to Literature',
                'credit_hours' => 3,
                'description' => 'Literary analysis and critical thinking',
                'department_code' => 'ENG',
            ],
            [
                'course_title' => 'Creative Writing',
                'credit_hours' => 3,
                'description' => 'Fiction, poetry, and creative expression',
                'department_code' => 'ENG',
            ],
        ];

        foreach ($courses as $course) {
            $department = Department::where('code', $course['department_code'])->first();
            if ($department) {
                Course::create([
                    'course_title' => $course['course_title'],
                    'credit_hours' => $course['credit_hours'],
                    'description' => $course['description'],
                    'department_id' => $department->id,
                ]);
            }
        }
    }
}
