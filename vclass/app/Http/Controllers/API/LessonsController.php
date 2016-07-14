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
        return Lesson::with('course.teacher.user')->find($id);
    }
}
