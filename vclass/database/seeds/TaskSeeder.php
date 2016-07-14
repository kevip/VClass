<?php

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'title'       => 'First Project',
                'subtitle'    => 'Create your first project',
                'description' => 'Know you have to create your own first project',
                'lesson_id'   => 1,                
            ],
            [
                'title'       => 'Connect your database',
                'subtitle'    => 'Connect Laravel with MySQL',
                'description' => 'Connect your database with Laravel: you have to configure your .env file',
                'lesson_id'   => 2,
            ],
            [
                'title'       => 'First Project',
                'subtitle'    => 'Create your first project',
                'description' => 'Know you have to create your own first project with Spring Framework',
                'lesson_id'   => 3,
            ],
            [
                'title'       => 'First Project',
                'subtitle'    => 'Create your first project',
                'description' => 'Know you have to create your own first project with Power Builder',
                'lesson_id'   => 4,
            ],
            [
                'title'       => 'Connect your database',
                'subtitle'    => 'Connection with Oracle',
                'description' => 'Know you have to connect your project with Oracle',
                'lesson_id'   => 5,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
