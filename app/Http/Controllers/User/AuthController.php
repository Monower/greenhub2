<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:20',
            'email'=>'required|email|unique:users,email',
            'address'=>'required',
            'password'=>'required|min:8|max:20|confirmed'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator->errors());
        }else{
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'password'=>Hash::make($request->password)
            ]);
        }

        if(!Storage::disk('public')->exists('repositories/'.$request->email)){
            Storage::disk('public')->makeDirectory('repositories/'.$request->email);
        }

        return redirect(route('login'));
    }
}
