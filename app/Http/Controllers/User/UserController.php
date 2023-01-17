<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function dashboard($id=null){
        if($id==null){
            $user = User::find(auth()->user()->id);
            return view('pages.dashboard');
        }
    }

    public function info_update(Request $request){
        // return $request->all();
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:20',
            'address'=>'required',
            'image'=>'image|size:10240',
            'about'=>'max:200'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator->errors());
        }

        if(!Storage::disk('public')->exists('image/profile')){
            Storage::disk('public')->makeDirectory('image/profile');
        }

        $user = User::find(auth()->user()->id);

        if(isset($request->image)){
            if(Storage::disk('public')->exists('image/profile/'.$user->image)){
                Storage::delete('image/profile/'.$user->image);
            }

            $newFileName= auth()->user()->name.".".$request->image->extension();
            Storage::disk('public')->put('image/profile/'.$newFileName, file_get_contents($request->file('image')));
        }

        $user->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'bio'=>$request->about,
            'image'=>isset($newFileName) ? $newFileName : null,
            
        ])
    }
}
