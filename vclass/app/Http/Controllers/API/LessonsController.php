<?php

namespace App\Http\Controllers\API;

use App\Models\Lesson;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{
    public function index () {
        return Lesson::all();
    }
    public function show($id){
        return Lesson::with(['course.teacher.user','tasks'])->find($id);
    }

    public function store(Request $request){
        
        $lesson = Lesson::create($request->all());

        return $lesson;
    }
    public function update (Request $request, $id){        
        $lesson = Lesson::find($id);
                

    	$tasks = $request->get('tasks');
        if ($tasks && is_array($tasks) && !empty($tasks)) {
        	$lesson->tasks()->delete();
            foreach ($tasks as $task) {
                $lesson->tasks()->create($task);
            }
        }

        $lesson->fill($request->all());
        $lesson->save();        
        return $lesson;
    }
}
