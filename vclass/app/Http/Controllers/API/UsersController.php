<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index () {
        return User::all();
    }

    public function show($id){
        return User::find($id);
    }

    public function update (Request $request, $id){

        $user = User::find($id);                
        $user->fill($request->all());
        $user->save();        

        return $user;
    }
}
