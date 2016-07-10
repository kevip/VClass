<?php

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
        $courses = [
            [
                'name'     => 'Laravel',
                'code'    => '001',
                'teacher_id' => 1,
                'image' => 'http://laraveldaily.com/wp-content/uploads/2015/06/laravel-logo-big.png',
                'category_id'  => 1
            ],
            [
                'name'     => 'Spring Framework',
                'code'     => '002',
                'image'    => 'http://www.javatpoint.com/images/spimages/spring1.png',
                'teacher_id' => 2,
                'category_id'  => 1
            ],
            [
                'name'     => 'Power Builder',
                'code'     => '003',
                'image'    => 'http://3.bp.blogspot.com/-0qmXn8mzprI/TVbR0rIJ_JI/AAAAAAAAAB4/P-5-qi18T8Q/s1600/PowerBuilder.jpg',
                'teacher_id' => 2,
                'category_id'  => 1
            ],

        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
