<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = array(
            0 => array(
                'first_name'   => 'Ali',
                'last_name'    => 'Kamran'
            ),
            1 => array(
                'first_name'   => 'Haider',
                'last_name'    => 'Kamran'
            ),
            2 => array(
                'first_name'   => 'Ahmad',
                'last_name'    => 'Kamran'
            ),
            3 => array(
                'first_name'   => 'Moeez',
                'last_name'    => 'Kamran'
            ),
            4 => array(
                'first_name'   => 'Amar',
                'last_name'    => 'Kamran'
            ),
        );

        foreach($students as $tudent)
        {
            Student::updateOrInsert([
                'first_name' => $tudent['first_name'],
                'last_name' => $tudent['last_name']
            ]);
        }
    }
}
