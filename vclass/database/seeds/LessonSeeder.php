<?php

use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
            [
                'subject'     => 'Introduction',
                'description' => 'Laravel introduction',
                //'video' => 'https://www.youtube.com/watch?v=2_BKIhjHwS8',
                'video' => '2_BKIhjHwS8',
                'weekend' => 1,
                'course_id' => 1
            ],
            [
                'subject'     => 'Database Connection',
                'description' => 'We teach you how to connect to a database with Laravel',
                //'video' => 'https://www.youtube.com/watch?v=5bY_qB0vCOE',
                'video' => '5bY_qB0vCOE',
                'weekend' => 2,
                'course_id' => 1
            ],            
            [
                'subject'     => 'Introduction',
                'description' => 'Introduction to Spring Framework',
                //'video' => 'https://www.youtube.com/watch?v=r4kqcSs4F7I',
                'video' => 'r4kqcSs4F7I',
                'weekend' => 1,
                'course_id' => 2
            ],
            [
                'subject'     => 'Introduction',
                'description' => 'Introduction to Power Builder',
                //'video' => 'https://www.youtube.com/watch?v=o82Magu_vpw',
                'video' => 'o82Magu_vpw',
                'weekend' => 1,
                'course_id' => 3
            ],
            [
                'subject'     => 'Database Connection',
                'description' => 'Introduction to Power Builder database conection',
                //'video' =>  'https://www.youtube.com/watch?v=eFJ7v2UK5ek',
                'video' =>  'eFJ7v2UK5ek',
                'weekend' => 2,
                'course_id' => 3
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
