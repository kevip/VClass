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

        return Course::with(['lessons.tasks','teacher'])->find($id);        
    }

    public function store(Request $request){
        
        $course = Course::create($request->all());

        return $course;
    }
    public function update (Request $request, $id){

        $c = Course::create($request->all());

        return $c;
    }
}
