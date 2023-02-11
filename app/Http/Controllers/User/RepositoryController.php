<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Contributor;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RepositoryController extends Controller
{
    public function create_repository(Request $request){
        $validator = Validator::make($request->all(), [
            'repository_name'=>'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput($request->all());
        }

        $data = Repository::where(['name'=>$request->repository_name, 'user_id'=>auth()->user()->id])->first();

        if(isset($data)){
            return back()->with(['message'=>'a repository with same name exists']);
        }

        Storage::disk('public')->makeDirectory('repositories/'.auth()->user()->email.'/'.$request->repository_name);

        $repository = Repository::create([
            'name'=>$request->repository_name,
            'description'=>$request->repository_description,
            'access_modifier'=>$request->acess_modifier,
            'user_id'=>auth()->user()->id
        ]);

        Contributor::create([
            'user_id'=>auth()->user()->id,
            'repository_id'=>$repository->id
        ]);

        return redirect(route('user.show-repository',['repository_id'=>$repository->id, 'user_id'=>auth()->user()->id]));
    }

    public function show_repository($repository_id, $user_id){
        $repository = Repository::with('branches')->where(['id'=>$repository_id, 'user_id'=>$user_id])->first();
        // $file_name

        return view('pages.repository', ['repository'=>$repository, /* 'file_name'=>$file_name, */ 'user_id'=>$user_id]);
    }

    public function delete_repository(Request $request){
        $repository = Repository::where(['id'=>$request->repository_id, 'user_id'=>auth()->user()->id])->first();
        Storage::disk('public')->deleteDirectory('repositories/'.auth()->user()->email.'/'.$repository->name);
        $repository->delete();
        return redirect(route('user.dashboard', ['id'=>auth()->user()->id]));
    }
}
