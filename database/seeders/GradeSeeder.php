<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
            'course_name' => 'Programme and Case Orientation',
            'test_name' => 'Assessment',
            'best_grade' => '9.1',
            ],
            [
            'course_name' => 'Computer Science & Basics',
            'test_name' => 'Written',
            'best_grade' => '8.2',
            ],
            [
            'course_name' => 'Programming Basics',
            'test_name' => 'Case Study Exam',
            'best_grade' => '10.0',
            ],
            [
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Case Study',
            'best_grade' => '7.0',
            ],
            [
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Project',
            'best_grade' => '7.8',
            ],
            [
            'course_name' => 'Framework Project 1',
            'test_name' => 'Project',
            'best_grade' => '0',
            ],
            [
            'course_name' => 'Framework Project 1',
            'test_name' => 'Assessment',
            'best_grade' => '0',
            ],
            [
            'course_name' => 'Framework Project 1',
            'test_name' => 'Report',
            'best_grade' => '0',
            ],
            [
            'course_name' => 'Framework Project 2',
            'test_name' => 'Portfolio',
            'best_grade' => '0',
            ],
            [
            'course_name' => 'Framework Project 2',
            'test_name' => 'Project',
            'best_grade' => '0',
            ],
            [
            'course_name' => 'Framework Project 2',
            'test_name' => 'Assessment',
            'best_grade' => '0',
            ]
        ]);
        //
    }
}
