<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Department;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            // Computer Science Students
            [
                'first_name' => 'John',
                'last_name' => 'Smith',
                'email' => 'john.smith@university.edu',
                'date_of_birth' => '2000-03-15',
                'phone' => '+1-555-0101',
                'address' => '123 Main St, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Passionate about software development and AI',
                'department_code' => 'CS',
            ],
            [
                'first_name' => 'Sarah',
                'last_name' => 'Johnson',
                'email' => 'sarah.johnson@university.edu',
                'date_of_birth' => '2001-07-22',
                'phone' => '+1-555-0102',
                'address' => '456 Oak Ave, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Interested in web development and cybersecurity',
                'department_code' => 'CS',
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Brown',
                'email' => 'michael.brown@university.edu',
                'date_of_birth' => '1999-11-08',
                'phone' => '+1-555-0103',
                'address' => '789 Pine Rd, City, State 12345',
                'status' => 'active',
                'admission_date' => '2022-09-01',
                'description' => 'Focusing on data science and machine learning',
                'department_code' => 'CS',
            ],

            // Electrical Engineering Students
            [
                'first_name' => 'Emily',
                'last_name' => 'Davis',
                'email' => 'emily.davis@university.edu',
                'date_of_birth' => '2000-05-12',
                'phone' => '+1-555-0104',
                'address' => '321 Elm St, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Interested in renewable energy systems',
                'department_code' => 'EE',
            ],
            [
                'first_name' => 'David',
                'last_name' => 'Wilson',
                'email' => 'david.wilson@university.edu',
                'date_of_birth' => '2001-01-30',
                'phone' => '+1-555-0105',
                'address' => '654 Maple Dr, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Focusing on power electronics and control systems',
                'department_code' => 'EE',
            ],

            // Mechanical Engineering Students
            [
                'first_name' => 'Jessica',
                'last_name' => 'Miller',
                'email' => 'jessica.miller@university.edu',
                'date_of_birth' => '2000-09-18',
                'phone' => '+1-555-0106',
                'address' => '987 Cedar Ln, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Passionate about robotics and automation',
                'department_code' => 'ME',
            ],
            [
                'first_name' => 'Robert',
                'last_name' => 'Taylor',
                'email' => 'robert.taylor@university.edu',
                'date_of_birth' => '1999-12-03',
                'phone' => '+1-555-0107',
                'address' => '147 Birch Way, City, State 12345',
                'status' => 'active',
                'admission_date' => '2022-09-01',
                'description' => 'Interested in automotive engineering',
                'department_code' => 'ME',
            ],

            // Business Administration Students
            [
                'first_name' => 'Amanda',
                'last_name' => 'Anderson',
                'email' => 'amanda.anderson@university.edu',
                'date_of_birth' => '2001-04-25',
                'phone' => '+1-555-0108',
                'address' => '258 Spruce St, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Focusing on entrepreneurship and innovation',
                'department_code' => 'BA',
            ],
            [
                'first_name' => 'Christopher',
                'last_name' => 'Thomas',
                'email' => 'christopher.thomas@university.edu',
                'date_of_birth' => '2000-08-14',
                'phone' => '+1-555-0109',
                'address' => '369 Willow Ave, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Interested in finance and investment management',
                'department_code' => 'BA',
            ],

            // Mathematics Students
            [
                'first_name' => 'Lisa',
                'last_name' => 'Jackson',
                'email' => 'lisa.jackson@university.edu',
                'date_of_birth' => '2001-02-11',
                'phone' => '+1-555-0110',
                'address' => '741 Poplar Rd, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Passionate about pure mathematics and research',
                'department_code' => 'MATH',
            ],
            [
                'first_name' => 'Daniel',
                'last_name' => 'White',
                'email' => 'daniel.white@university.edu',
                'date_of_birth' => '2000-06-07',
                'phone' => '+1-555-0111',
                'address' => '852 Ash Blvd, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Focusing on applied mathematics and modeling',
                'department_code' => 'MATH',
            ],

            // Physics Students
            [
                'first_name' => 'Rachel',
                'last_name' => 'Harris',
                'email' => 'rachel.harris@university.edu',
                'date_of_birth' => '2001-10-20',
                'phone' => '+1-555-0112',
                'address' => '963 Chestnut Dr, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Interested in quantum physics and cosmology',
                'department_code' => 'PHY',
            ],

            // Chemistry Students
            [
                'first_name' => 'Kevin',
                'last_name' => 'Clark',
                'email' => 'kevin.clark@university.edu',
                'date_of_birth' => '2000-12-28',
                'phone' => '+1-555-0113',
                'address' => '159 Walnut Ln, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Focusing on organic chemistry and drug discovery',
                'department_code' => 'CHEM',
            ],

            // English Literature Students
            [
                'first_name' => 'Nicole',
                'last_name' => 'Lewis',
                'email' => 'nicole.lewis@university.edu',
                'date_of_birth' => '2001-03-05',
                'phone' => '+1-555-0114',
                'address' => '357 Sycamore Way, City, State 12345',
                'status' => 'active',
                'admission_date' => '2023-09-01',
                'description' => 'Passionate about creative writing and poetry',
                'department_code' => 'ENG',
            ],

            // Some inactive/graduated students for variety
            [
                'first_name' => 'Mark',
                'last_name' => 'Robinson',
                'email' => 'mark.robinson@university.edu',
                'date_of_birth' => '1998-07-16',
                'phone' => '+1-555-0115',
                'address' => '486 Hickory St, City, State 12345',
                'status' => 'graduated',
                'admission_date' => '2020-09-01',
                'description' => 'Graduated with honors in Computer Science',
                'department_code' => 'CS',
            ],
            [
                'first_name' => 'Jennifer',
                'last_name' => 'Walker',
                'email' => 'jennifer.walker@university.edu',
                'date_of_birth' => '1999-11-23',
                'phone' => '+1-555-0116',
                'address' => '753 Beech Ave, City, State 12345',
                'status' => 'suspended',
                'admission_date' => '2022-09-01',
                'description' => 'Currently suspended due to academic probation',
                'department_code' => 'BA',
            ],
        ];

        foreach ($students as $student) {
            $department = Department::where('code', $student['department_code'])->first();
            if ($department) {
                Student::create([
                    'first_name' => $student['first_name'],
                    'last_name' => $student['last_name'],
                    'email' => $student['email'],
                    'date_of_birth' => $student['date_of_birth'],
                    'phone' => $student['phone'],
                    'address' => $student['address'],
                    'status' => $student['status'],
                    'admission_date' => $student['admission_date'],
                    'description' => $student['description'],
                    'department_id' => $department->id,
                ]);
            }
        }
    }
}
