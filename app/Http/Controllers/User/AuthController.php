<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:20',
            'email'=>'required|email',
            'address'=>'required',
            'password'=>'required|min:8|max:20|confirmed'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator->errors());
        }
    }
}
