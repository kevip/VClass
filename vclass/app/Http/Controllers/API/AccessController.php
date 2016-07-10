<?php

namespace App\Http\Controllers\API;

use App\Models\Access;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccessController extends Controller
{
    public function index () {
        //return Course::all();
    }
    public function show($id){
        return Access::find($id);
    }
}
