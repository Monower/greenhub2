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
/*         if($id==null){
            $user = User::find(auth()->user()->id);
            return view('pages.dashboard');
        }else{
            $user = User::find($id);
            return view('pages.dashboard', ['id'=>$user->id]);
        } */

        if(isset($id)){
            $user = User::find($id);

            return view('pages.dashboard', ['id'=>$user->id]);
        }

        return view(('pages.dashboard'));
    }

    public function info_update(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:20',
            'address'=>'required',
            'image'=>'max:10240',
            'about'=>'max:200'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator->errors());
        }

        if(!Storage::disk('public')->exists('image')){
            Storage::disk('public')->makeDirectory('image');
        }

        $user = User::find(auth()->user()->id);

        if(isset($request->image)){
/*             if(Storage::disk('public')->exists('image/'.$user->image)){
                Storage::delete('image/'.$user->image);
            } */

            $newFileName= auth()->user()->id.".".$request->image->extension();
            Storage::disk('public')->put('image/'.$newFileName, file_get_contents($request->file('image')));
        }

        $user->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'bio'=>$request->about,
            'image'=>isset($newFileName) ? $newFileName : null,
            
        ]);

        return back();
    }
}
