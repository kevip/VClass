<?php

namespace App\Http\Controllers\API;

use App\Models\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function index () {
        return Teacher::all();
    }
    public function show($id){
        return Teacher::find($id);
    }
}
