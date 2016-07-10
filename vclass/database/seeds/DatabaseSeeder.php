<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
    }
}
