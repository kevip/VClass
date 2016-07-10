<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'     => 'Language Programming'
            ],
            [
                'name'     => 'Networking'
            ],
            [
                'name'     => 'Engineering'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
