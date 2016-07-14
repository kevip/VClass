<?php

namespace App\Http\Controllers\API;

use App\Models\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index () {
        return Task::all();
    }
    public function show($id){
        return Task::with('lesson')->find($id);
    }
}
