@include('templates.header')
@include('templates.navbar')
<script src="https://cdn.tailwindcss.com"></script>
<div class="container grid grid-cols-5 gap-4 pt-3 ">
    <div class="grid grid-cols-4 justify-items-start rounded col-span-3">
        <div class="pl-1">
            <select class="bg-slate-400 rounded text-center" name="" id="">
                <option value="">main</option>
                <option  value="">+</option>
            </select>
        </div>
        <div class="col-span-2">
            <h3 class="font-bold">{{$repository->name}}</h3>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <i title="add new file" class="bi bi-file-earmark-plus-fill"></i>
            <i title="delete this branch" class="bi bi-trash-fill"></i>
            <i title="save this repository" class="bi bi-bookmark-fill"></i>
            
        </div>
    </div>
    <div class="pl-12">
        <h2 class="font-bold">Description</h2>
        <small>{{$repository->description}}</small>
    </div>
    <div class="flex justify-end">
        <button type="button" data-toggle="modal" data-target="#delete_repository"><i title="delete this repository" class="bi bi-trash-fill" style="color: red"></i></button>
    </div>
</div>


<div class="container grid grid-cols-5 pt-3">
    <div class=" col-span-4">
        <div class="flex justify-around">
            <p>hello.py</p>
            <p>commit message</p>
            <p>3 days a go</p>
        </div>

    </div>
    <div>
        <h2 class="font-bold">Contributors</h2>
        <div class="flex flex-col gap-y-3">
            <div class="flex flex-row">
                <img src="{{asset('sadaf.jpg')}}" alt="profile image" height="35" width="35" style="border-radius: 50%">
                <a href="">demo contributor</a>
            </div>
            <div class="flex flex-row">
                <img src="{{asset('sadaf.jpg')}}" alt="profile image" height="35" width="35" style="border-radius: 50%">
                <a href="">demo contributor</a>
            </div>
            <div class="flex flex-row">
                <img src="{{asset('sadaf.jpg')}}" alt="profile image" height="35" width="35" style="border-radius: 50%">
                <a href="">demo contributor</a>
            </div>
            <div class="flex flex-row">
                <img src="{{asset('sadaf.jpg')}}" alt="profile image" height="35" width="35" style="border-radius: 50%">
                <a href="">demo contributor</a>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="delete_repository" tabindex="-1" role="dialog" aria-labelledby="delete_repositoryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="delete_repositoryLabel">Delete this repository?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('user.delete-repository')}}" method="post">
                @csrf
                <input type="hidden" name="repository_id" value="{{$repository->id}}">
                <div class="grid grid-cols-2 justify-items-center">
                    <button type="submit" class="bg-red-600 text-slate-50 border rounded w-[150px] hover:bg-red-700">yes</button>
                    <button type="button" class="bg-green-500 text-slate-50 border rounded w-[150px] hover:bg-green-600" data-dismiss="modal">no</button>
                </div>

            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>




@include('templates.footer')