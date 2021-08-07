<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = array(
            ['name' => 'English'],
            ['name' => 'Urdu'],
            ['name' => 'Math'],
            ['name' => 'Science'],
            ['name' => 'Computer']

        );

        foreach($courses as $course)
        {
            Course::updateOrInsert([
                'name' => $course['name']
            ]);
        }
    }
}
