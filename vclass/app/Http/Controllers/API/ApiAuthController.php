<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiAuthController extends Controller
{

    public function userAuth(Request $request){
        $credentials = $request->only('email','password');
        $token = null;
        try{
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json(['error' => 'invalid_credentials']);
            }
        }catch(JWTException $ex){
            return response()->json(['error' => 'some_crappy_error'],500);
        }

        return response()->json(compact('token'));
    }

}
