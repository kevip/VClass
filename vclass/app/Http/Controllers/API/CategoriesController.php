<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index () {
        return Category::all();
    }
    public function show($id){
        return Category::find($id);
    }

    public function store(Request $request){
        
        $category = Category::create($request->all());

        return $category;
    }
    public function update (Request $request, $id){        
    /*    $lesson = Lesson::find($id);
                

    	$tasks = $request->get('tasks');
        if ($tasks && is_array($tasks) && !empty($tasks)) {
        	$lesson->tasks()->delete();
            foreach ($tasks as $task) {
                $lesson->tasks()->create($task);
            }
        }

        $lesson->fill($request->all());
        $lesson->save();        
        return $lesson;*/
    }
}
