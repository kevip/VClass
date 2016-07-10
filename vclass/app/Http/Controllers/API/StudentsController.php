<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index () {
        return Student::all();
    }
    public function show($id){
        return Student::find($id);
    }
}
