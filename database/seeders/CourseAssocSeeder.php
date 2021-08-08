<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;
use App\Models\CourseAssoc;

class CourseAssocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::get();

        for($i=0; $i < 10; $i++)
        {
            $course = Course::inRandomOrder()->first();
            foreach($students as $student)
            {
                CourseAssoc::updateOrInsert([
                    'course_id' => $course->id , 'student_id' => $student->id
                ]);
            }
        }

    }
}
