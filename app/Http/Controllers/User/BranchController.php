<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BranchController extends Controller
{
    public function create_branch(Request $request){

        $repository = Repository::find($request->repository_id);
        Storage::disk('public')->makeDirectory('repositories/'.auth()->user()->email.'/'.$repository->name.'/'.$request->name);

        Branch::create([
            'name'=>$request->name,
            'repository_id'=>$repository->id
        ]);

        return back();
    }
}
