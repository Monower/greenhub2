<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function add_file(Request $request){
        /* return $request->all(); */

        $repository_file_name = File::where(['name'=>$request->file('file')->getClientOriginalName(), 'repository_id'=>$request->repository_id])->first();

        if(isset($repository_file_name)){
            return back();
        }else{
            $repository = Repository::with('user')->find($request->repository_id);
            $email = $repository->user->email;
            $file_name = $request->file('file')->getClientOriginalName();

            Storage::disk('public')->put('repositories/'.$email.'/'.$repository->name.'/'.$file_name, file_get_contents($request->file('file')));

            File::create([
                'name'=>$file_name,
                'repository_id'=>$request->repository_id,
                'commit_message'=>$request->commit_message,
                'user_id'=>auth()->user()->id
            ]);

            return back();
        }
    }

    public function show_file(){
        return view('pages.bookmarks');
    }
}
