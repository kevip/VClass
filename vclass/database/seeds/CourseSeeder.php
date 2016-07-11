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
        /*$faker = Faker\Factory::create();

        $limit = 10;
        $courses = [];
        for ($i = 0; $i < $limit; $i++) {
            $course = [
                'name'     => $faker->userAgent,
                'code'    => 'C-$i',
                'teacher_id' => rand(1,2),
                //'image' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
                'category_id'  => rand(1,2)
            ];
            array_push($courses,$course);

        }*/

        $courses = [
            [
                'name'     => 'Laravel',
                'code'    => '001',
                'teacher_id' => 1,
                //'image' => 'http://laraveldaily.com/wp-content/uploads/2015/06/laravel-logo-big.png',
                'category_id'  => 1
            ],
            [
                'name'     => 'Spring Framework',
                'code'     => '002',
                //'image'    => 'http://www.javatpoint.com/images/spimages/spring1.png',
                'teacher_id' => 2,
                'category_id'  => 1
            ],
            [
                'name'     => 'Power Builder',
                'code'     => '003',
                //'image'    => 'http://3.bp.blogspot.com/-0qmXn8mzprI/TVbR0rIJ_JI/AAAAAAAAAB4/P-5-qi18T8Q/s1600/PowerBuilder.jpg',
                'teacher_id' => 2,
                'category_id'  => 1
            ],

        ];
        
        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
