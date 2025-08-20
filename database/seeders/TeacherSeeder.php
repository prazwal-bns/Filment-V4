<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            // Computer Science Teachers
            [
                'first_name' => 'Dr. James',
                'last_name' => 'Wilson',
                'email' => 'james.wilson@university.edu',
                'phone' => '+1-555-0201',
                'address' => '123 Faculty Ave, City, State 12345',
                'date_of_birth' => '1975-03-15',
                'hire_date' => '2010-09-01',
                'qualification' => 'Ph.D. in Computer Science',
                'specialization' => 'Artificial Intelligence, Machine Learning',
                'status' => 'active',
                'bio' => 'Dr. Wilson has over 15 years of experience in AI research and has published numerous papers in top-tier conferences.',
                'department_code' => 'CS',
                'is_head' => true,
            ],
            [
                'first_name' => 'Prof. Maria',
                'last_name' => 'Garcia',
                'email' => 'maria.garcia@university.edu',
                'phone' => '+1-555-0202',
                'address' => '456 Academic Blvd, City, State 12345',
                'date_of_birth' => '1980-07-22',
                'hire_date' => '2015-01-15',
                'qualification' => 'Ph.D. in Software Engineering',
                'specialization' => 'Software Architecture, Web Development',
                'status' => 'active',
                'bio' => 'Professor Garcia specializes in modern web technologies and software design patterns.',
                'department_code' => 'CS',
                'is_head' => false,
            ],
            [
                'first_name' => 'Dr. Robert',
                'last_name' => 'Chen',
                'email' => 'robert.chen@university.edu',
                'phone' => '+1-555-0203',
                'address' => '789 Scholar St, City, State 12345',
                'date_of_birth' => '1978-11-08',
                'hire_date' => '2012-08-20',
                'qualification' => 'Ph.D. in Database Systems',
                'specialization' => 'Database Management, Big Data',
                'status' => 'active',
                'bio' => 'Dr. Chen is an expert in database systems and big data analytics.',
                'department_code' => 'CS',
                'is_head' => false,
            ],

            // Electrical Engineering Teachers
            [
                'first_name' => 'Dr. Sarah',
                'last_name' => 'Thompson',
                'email' => 'sarah.thompson@university.edu',
                'phone' => '+1-555-0204',
                'address' => '321 Engineering Dr, City, State 12345',
                'date_of_birth' => '1973-05-12',
                'hire_date' => '2008-09-01',
                'qualification' => 'Ph.D. in Electrical Engineering',
                'specialization' => 'Power Systems, Renewable Energy',
                'status' => 'active',
                'bio' => 'Dr. Thompson is a leading expert in renewable energy systems and power electronics.',
                'department_code' => 'EE',
                'is_head' => true,
            ],
            [
                'first_name' => 'Prof. David',
                'last_name' => 'Kim',
                'email' => 'david.kim@university.edu',
                'phone' => '+1-555-0205',
                'address' => '654 Circuit Rd, City, State 12345',
                'date_of_birth' => '1982-01-30',
                'hire_date' => '2016-03-01',
                'qualification' => 'Ph.D. in Electronics',
                'specialization' => 'Digital Electronics, VLSI Design',
                'status' => 'active',
                'bio' => 'Professor Kim specializes in digital electronics and integrated circuit design.',
                'department_code' => 'EE',
                'is_head' => false,
            ],

            // Mechanical Engineering Teachers
            [
                'first_name' => 'Dr. Michael',
                'last_name' => 'Rodriguez',
                'email' => 'michael.rodriguez@university.edu',
                'phone' => '+1-555-0206',
                'address' => '987 Mechanics Ln, City, State 12345',
                'date_of_birth' => '1970-09-18',
                'hire_date' => '2005-09-01',
                'qualification' => 'Ph.D. in Mechanical Engineering',
                'specialization' => 'Robotics, Automation',
                'status' => 'active',
                'bio' => 'Dr. Rodriguez has extensive experience in robotics and industrial automation.',
                'department_code' => 'ME',
                'is_head' => true,
            ],
            [
                'first_name' => 'Prof. Lisa',
                'last_name' => 'Anderson',
                'email' => 'lisa.anderson@university.edu',
                'phone' => '+1-555-0207',
                'address' => '147 Thermal Ave, City, State 12345',
                'date_of_birth' => '1985-12-03',
                'hire_date' => '2018-01-15',
                'qualification' => 'Ph.D. in Thermal Engineering',
                'specialization' => 'Thermodynamics, Heat Transfer',
                'status' => 'active',
                'bio' => 'Professor Anderson specializes in thermal systems and heat transfer applications.',
                'department_code' => 'ME',
                'is_head' => false,
            ],

            // Business Administration Teachers
            [
                'first_name' => 'Dr. Jennifer',
                'last_name' => 'Brown',
                'email' => 'jennifer.brown@university.edu',
                'phone' => '+1-555-0208',
                'address' => '258 Business St, City, State 12345',
                'date_of_birth' => '1976-04-25',
                'hire_date' => '2011-09-01',
                'qualification' => 'Ph.D. in Business Administration',
                'specialization' => 'Strategic Management, Entrepreneurship',
                'status' => 'active',
                'bio' => 'Dr. Brown is an expert in strategic management and has consulted for numerous Fortune 500 companies.',
                'department_code' => 'BA',
                'is_head' => true,
            ],
            [
                'first_name' => 'Prof. Christopher',
                'last_name' => 'Lee',
                'email' => 'christopher.lee@university.edu',
                'phone' => '+1-555-0209',
                'address' => '369 Finance Blvd, City, State 12345',
                'date_of_birth' => '1983-08-14',
                'hire_date' => '2017-08-01',
                'qualification' => 'Ph.D. in Finance',
                'specialization' => 'Corporate Finance, Investment Management',
                'status' => 'active',
                'bio' => 'Professor Lee specializes in corporate finance and investment strategies.',
                'department_code' => 'BA',
                'is_head' => false,
            ],

            // Mathematics Teachers
            [
                'first_name' => 'Dr. Amanda',
                'last_name' => 'White',
                'email' => 'amanda.white@university.edu',
                'phone' => '+1-555-0210',
                'address' => '741 Math Way, City, State 12345',
                'date_of_birth' => '1972-02-11',
                'hire_date' => '2009-09-01',
                'qualification' => 'Ph.D. in Pure Mathematics',
                'specialization' => 'Abstract Algebra, Number Theory',
                'status' => 'active',
                'bio' => 'Dr. White is a distinguished mathematician with contributions to abstract algebra.',
                'department_code' => 'MATH',
                'is_head' => true,
            ],
            [
                'first_name' => 'Prof. Daniel',
                'last_name' => 'Martinez',
                'email' => 'daniel.martinez@university.edu',
                'phone' => '+1-555-0211',
                'address' => '852 Statistics Dr, City, State 12345',
                'date_of_birth' => '1981-06-07',
                'hire_date' => '2014-01-20',
                'qualification' => 'Ph.D. in Applied Mathematics',
                'specialization' => 'Statistics, Mathematical Modeling',
                'status' => 'active',
                'bio' => 'Professor Martinez specializes in statistical analysis and mathematical modeling.',
                'department_code' => 'MATH',
                'is_head' => false,
            ],

            // Physics Teachers
            [
                'first_name' => 'Dr. Rachel',
                'last_name' => 'Johnson',
                'email' => 'rachel.johnson@university.edu',
                'phone' => '+1-555-0212',
                'address' => '963 Physics Ave, City, State 12345',
                'date_of_birth' => '1974-10-20',
                'hire_date' => '2007-09-01',
                'qualification' => 'Ph.D. in Theoretical Physics',
                'specialization' => 'Quantum Mechanics, Particle Physics',
                'status' => 'active',
                'bio' => 'Dr. Johnson is a renowned physicist specializing in quantum mechanics and particle physics.',
                'department_code' => 'PHY',
                'is_head' => true,
            ],

            // Chemistry Teachers
            [
                'first_name' => 'Dr. Kevin',
                'last_name' => 'Davis',
                'email' => 'kevin.davis@university.edu',
                'phone' => '+1-555-0213',
                'address' => '159 Chemistry Ln, City, State 12345',
                'date_of_birth' => '1977-12-28',
                'hire_date' => '2013-09-01',
                'qualification' => 'Ph.D. in Organic Chemistry',
                'specialization' => 'Organic Synthesis, Drug Discovery',
                'status' => 'active',
                'bio' => 'Dr. Davis is an expert in organic chemistry with focus on pharmaceutical applications.',
                'department_code' => 'CHEM',
                'is_head' => true,
            ],

            // English Literature Teachers
            [
                'first_name' => 'Dr. Nicole',
                'last_name' => 'Taylor',
                'email' => 'nicole.taylor@university.edu',
                'phone' => '+1-555-0214',
                'address' => '357 Literature Way, City, State 12345',
                'date_of_birth' => '1980-03-05',
                'hire_date' => '2016-09-01',
                'qualification' => 'Ph.D. in English Literature',
                'specialization' => 'Modern Literature, Creative Writing',
                'status' => 'active',
                'bio' => 'Dr. Taylor is a published author and expert in modern literature and creative writing.',
                'department_code' => 'ENG',
                'is_head' => true,
            ],

            // Some retired/inactive teachers for variety
            [
                'first_name' => 'Prof. Richard',
                'last_name' => 'Clark',
                'email' => 'richard.clark@university.edu',
                'phone' => '+1-555-0215',
                'address' => '486 Retired St, City, State 12345',
                'date_of_birth' => '1955-07-16',
                'hire_date' => '1985-09-01',
                'qualification' => 'Ph.D. in Computer Science',
                'specialization' => 'Programming Languages, Compiler Design',
                'status' => 'retired',
                'bio' => 'Professor Clark retired after 35 years of distinguished service in computer science education.',
                'department_code' => 'CS',
                'is_head' => false,
            ],
        ];

        foreach ($teachers as $teacher) {
            $department = Department::where('code', $teacher['department_code'])->first();
            if ($department) {
                Teacher::create([
                    'first_name' => $teacher['first_name'],
                    'last_name' => $teacher['last_name'],
                    'email' => $teacher['email'],
                    'phone' => $teacher['phone'],
                    'address' => $teacher['address'],
                    'date_of_birth' => $teacher['date_of_birth'],
                    'hire_date' => $teacher['hire_date'],
                    'qualification' => $teacher['qualification'],
                    'specialization' => $teacher['specialization'],
                    'status' => $teacher['status'],
                    'bio' => $teacher['bio'],
                    'department_id' => $department->id,
                ]);
            }
        }

        // Update department heads
        $this->assignDepartmentHeads();
    }

    private function assignDepartmentHeads()
    {
        $departmentHeads = [
            'CS' => 'james.wilson@university.edu',
            'EE' => 'sarah.thompson@university.edu',
            'ME' => 'michael.rodriguez@university.edu',
            'BA' => 'jennifer.brown@university.edu',
            'MATH' => 'amanda.white@university.edu',
            'PHY' => 'rachel.johnson@university.edu',
            'CHEM' => 'kevin.davis@university.edu',
            'ENG' => 'nicole.taylor@university.edu',
        ];

        foreach ($departmentHeads as $deptCode => $teacherEmail) {
            $department = Department::where('code', $deptCode)->first();
            $teacher = Teacher::where('email', $teacherEmail)->first();

            if ($department && $teacher) {
                $department->update(['head_of_department_id' => $teacher->id]);
            }
        }
    }
}
