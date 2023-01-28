@include('templates.header')
@include('templates.navbar')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<link href="./profile.css" rel="stylesheet" />
  <div class="container">
    <div class="row pt-3">
      <div class="col">
        @php
            $user_info = \App\Models\User::find($id);
        @endphp
        <img src="{{asset('storage/image/'.$user_info->image)}}" alt="default image" height="300" width="300" style="border-radius: 50%">
        <h2 class="pt-3">{{$user_info->name}}</h2>
        <small>{{$user_info->bio}}</small><br><br>
        {{-- <button style="border-radius: 20px" class="btn btn-primary">Edit Profile</button> --}}
        <button type="button" style="border-radius: 20px" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Edit profile
        </button>
        <div class="pt-3 pb-3">
          <i class="bi bi-people-fill"></i> <b>10 following 18 followers</b><br>
          <i class="bi bi-geo-alt-fill"></i> <b>{{$user_info->address}}</b><br>
          <i class="bi bi-envelope-fill"></i> <b>{{$user_info->email}}</b>
        </div>
      </div>
      <div style="padding-left: 200px" class="col">
          <h2>Repositories   <a href="#" title="Create new repository"><i title="create repository" type="button" data-bs-toggle="modal" data-bs-target="#create_repository" class="bi bi-file-earmark-plus-fill"></i></a></h2> 
      </div>
    </div>
  </div>

  {{-- edit profile modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('user.info_update')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="image-area">
                <img height="200px" width="300px"  id="imageResult" src="{{asset('storage/image/'.$user_info->image)}}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
              </div>

              <small>*select an image to change the profile picture*</small>
              <input class="form-control" type="file" name="image" id="image" oninput="imageResult.src=window.URL.createObjectURL(this.files[0])" required><br>
              <input type="text" name="name" value="{{$user_info->name}}" required><br>
              <textarea  name="about" id="" cols="30" rows="10">{{$user_info->bio}}</textarea><br>
              <input type="text" name="address" value="{{$user_info->address}}"><br>
              <button style="border-radius: 50px" class="btn btn-sm btn-primary" type="submit">Save Changes</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  {{-- create repository modal --}}
  <div class="modal fade" id="create_repository" tabindex="-1" aria-labelledby="create_repositoryLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create_repositoryLabel2">Create Repository</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('user.create_repository')}}" method="post">
              @csrf
              <div class="form-group">
                <label for="repository_name" class="form-label mt-4">Name <span style="color: red" title="required">*</span></label>
                <input type="text" class="form-control" id="repository_name" name="repository_name" aria-describedby="emailHelp" placeholder="Name of the repository" required>
              </div>
              <div class="form-group">
                <label for="repository_description" class="form-label mt-4">Description <small class="form-text text-muted">(optional)</small></label>
                <input type="text" class="form-control" id="repository_description" name="repository_description" aria-describedby="emailHelp" placeholder="Description of the repository">
              </div>

              <fieldset class="form-group">
                <div class="form-check mt-3">
                  <input class="form-check-input" type="radio" name="acess_modifier" id="optionsRadios1" value="0" checked="">
                  <i class="bi bi-book"></i> Public<br>
                  <small class="form-text text-muted">Anyone can see the repository.</small>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="acess_modifier" id="optionsRadios2" value="1">
                  <i class="bi bi-journal"></i> Private <br>
                  <small class="form-text text-muted">You chose who can see this repository.</small>
                </div>
              </fieldset><br>
              <button style="border-radius: 50px" class="btn btn-sm btn-success" type="submit">Create Repository</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>






  





@include('templates.footer')