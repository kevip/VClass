<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'user_id'     => '1',
            ],
            [
                'user_id'     => '2',
            ],

        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
