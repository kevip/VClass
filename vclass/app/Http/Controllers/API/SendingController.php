<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Sending;

class SendingController extends Controller
{
    public function index () {

        //return Sending::all();
    }

    public function show($id){

        return Sending::find($id);        
    }

    public function store(Request $request){
        return $request->get('sending_file');
        $sending = Sending::create($request->all());

        return $sending;
    }
    public function update (Request $request, $id){

        //$s = Sending::create($request->all());

        //return $s;
    }
}
