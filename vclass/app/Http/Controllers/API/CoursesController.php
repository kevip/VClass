<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index () {

        return Course::all();
    }

    public function show($id){
        
        return Course::with(['lessons.tasks','teacher','category'])->find($id);        
    }

    public function store(Request $request){
        
        $course = Course::create($request->all());

        return $course;
    }
    public function update (Request $request, $id){        
        $course = Course::find($id);
                
        $course->fill($request->all());
        $course->save();        

        return $course;
    }
}
