@include('templates.header')
@include('templates.navbar')
<script src="https://cdn.tailwindcss.com"></script>

<style>
  *{
    font-family: monospace
  }
</style>

<div class="container grid grid-cols-5 gap-4 pt-3 ">
    <div class="grid grid-cols-4 justify-items-start rounded col-span-3">
        <div class="col-span-2">
            <h3 class="font-bold">{{$repository->name}}</h3>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <span class="text-[#158cba]"><i type="button" data-toggle="modal" data-target="#addFile" title="add new file" class="bi bi-file-earmark-plus-fill"></i></span>
            <span class="text-[#158cba]"><i title="save this repository" class="bi bi-bookmark-fill"></i></span>
            <span class="text-[#158cba]"><i type="button" title="add contributor" class="bi bi-person-fill-add"></i></span>
            
            
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
<hr>
<div class="container grid grid-cols-5 pt-3">
    <div class=" col-span-4">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">File Name</th>
            <th scope="col">Commit Message</th>
            <th scope="co">Commited By</th>
            <th scope="col">Updated At</th>
          </tr>
        </thead>
        <tbody>
          @php
              $si=1;
          @endphp

          @foreach ($file as $item)
            <tr>
              <th scope="row">{{$si}}</th>
              <td><a href="">{{$item->name}}</a></td>
              <td>{{$item->commit_message}}</td>
              <td><a href="">{{$item->user->name}}</a></td>
              <td>{{$item->updated_at}}</td>
            </tr>

            @php
                $si+=1;
            @endphp
          @endforeach

        </tbody>
      </table>
    </div>
    <div>
        <h2 class="font-bold">Contributors</h2>

        <div class="flex flex-col gap-y-3">
            @foreach ($contributor as $item)
              <div class="flex flex-row">
                <img src="{{asset('storage/image/'.$item->contributor->image)}}" alt="profile image" class="inline w-[35px] h-[35px] rounded-full">
                <a class="pt-1 pl-1" href="">{{$item->contributor->name}}</a>
              </div>
            @endforeach
        </div>
    </div>
</div>





  <!-- delete repository modal -->
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

  {{-- add file modal --}}
  <div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="addFileLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-slate-900">
        <div class="modal-header">
          <h5 class="modal-title text-slate-50 font-mono" id="addFileLabel">Add new File:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-[#FFFFFF]" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('user.add-file')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="repository_id" value="{{$repository->id}}">

                <div class="grid grid-cols-1 gap-4 pb-2">
                  <div class="flex">
                    <h3 class="text-[#FFFFFF] mt-1 pr-2">Select File:</h3>
                    <input class="text-[#FFFFFF]" type="file" name="file" multiple required>
                  </div>
                  <div>
                    <h3 class="text-[#FFFFFF] pb-2">Add commit message:</h3>
                    <textarea class="rounded" name="commit_message" id="" cols="40" rows="5" placeholder="Add detailed commit message..."></textarea>
                  </div>
                </div>
                <button class="bg-green-500 hover:bg-green-400 text-slate-50 rounded-md px-3 py-1" type="submit">Add File</button>
            </form>
        </div>
      </div>
    </div>
  </div>



@include('templates.footer')