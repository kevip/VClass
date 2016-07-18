<?php

namespace App\Http\Controllers\API;

use App\Models\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function index () {
        return Teacher::with(['courses','user'])->get();
    }
    public function show($id){
        return Teacher::with(['courses.category','user'])->find($id);
    }
}
