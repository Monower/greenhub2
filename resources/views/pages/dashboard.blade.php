@include('templates.header')
@include('templates.navbar')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<link href="./profile.css" rel="stylesheet" />

{{-- <div>
    <div class="profile-container">
          <div class="profile-profile2">
            <div class="profile-frame132">
              <img
                alt="Ellipse22045"
                src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/9c083c0a-aef2-4229-bb4d-ad85efcf8757/4a396aa6-5ad7-425b-b463-3277787a81d7?org_if_sml=1126684"
                class="profile-ellipse22"
              />
              <span class="profile-text72"><span>Monower</span></span>
              <span class="profile-text74"><span>Monower Sadaf</span></span>
              <span class="profile-text76"><span>about myself</span></span>
              <div class="profile-frame92">
                <img
                  alt="Rectangle102051"
                  src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/9c083c0a-aef2-4229-bb4d-ad85efcf8757/c2d4cc8d-6e61-4cbf-8171-70d9bae7c1b3?org_if_sml=11052"
                  class="profile-rectangle102"
                />
                <span class="profile-text78"><span>Edit Profile</span></span>
              </div>
            </div>
            <div class="profile-frame122">
              <div class="profile-group12">
                <div class="profile-group13">
                  <div class="profile-group14">
                    <img
                      alt="Vector2067"
                      src="public/playground_assets/vector2067-7s4q.svg"
                      class="profile-vector15"
                    />
                  </div>
                  <div class="profile-group15">
                    <img
                      alt="Vector2069"
                      src="public/playground_assets/vector2069-7sx.svg"
                      class="profile-vector16"
                    />
                  </div>
                  <div class="profile-group16">
                    <img
                      alt="Vector2071"
                      src="public/playground_assets/vector2071-lhvh.svg"
                      class="profile-vector17"
                    />
                  </div>
                  <div class="profile-group17">
                    <img
                      alt="Vector2073"
                      src="public/playground_assets/vector2073-ebz.svg"
                      class="profile-vector18"
                    />
                  </div>
                </div>
              </div>
              <img
                alt="Vector2076"
                src="public/playground_assets/vector2076-eax.svg"
                class="profile-vector19"
              />
              <img
                alt="Vector2079"
                src="public/playground_assets/vector2079-yuls.svg"
                class="profile-vector20"
              />
              <span class="profile-text80">
                <span>10 following 18 followers</span>
              </span>
              <span class="profile-text82"><span>My address</span></span>
              <span class="profile-text84">
                <span>example@example.com</span>
              </span>
            </div>
            <div class="profile-frame142">
              <span class="profile-text86"><span>Repositories</span></span>
                    <span class="profile-text88"><span>Repository12</span></span>
                    <div class="profile-frame102">
                      <img
                        alt="Rectangle112486"
                        src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/9c083c0a-aef2-4229-bb4d-ad85efcf8757/6cb623cb-e5f5-4854-90a7-d3775d4dce03?org_if_sml=1802"
                        class="profile-rectangle112"
                      />
                      <span class="profile-text90"><span>public</span></span>
                    </div>
                    <span class="profile-text92">
                      <span>
                        <span>description of the repository</span>
                        <br />
                        <span></span>
                        <br />
                        <span>updated on 23.10.2022 10:10 pm</span>
                      </span>
                    </span>
                    <img
                      alt="Line22491"
                      src="public/playground_assets/line22491-00yf.svg"
                      class="profile-line22"
                    />
                    <img
                      alt="Line32492"
                      src="public/playground_assets/line32492-v95p.svg"
                      class="profile-line32"
                    />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

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
          <h2>Repositories   <a href="" title="Create new repository"><i class="bi bi-file-earmark-plus-fill"></i></a></h2> 
      </div>
    </div>
  </div>


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
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>






  





@include('templates.footer')