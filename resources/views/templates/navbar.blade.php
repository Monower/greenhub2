
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="padding: 15px">
        <div class="container-fluid">
            <form class="d-flex">
                <input id="search" class="form-control me-sm-2" type="text" placeholder="Search" name="search">
            </form>
        </div>

{{--         <a title="messages" class="btn btn-sm btn-primary" href="{{route('user.get_user_message')}}"><i class="bi bi-envelope-fill"></i></a>
        <a title="bookmarks" class="btn btn-sm btn-primary" href="{{route('user.user_bookmarks')}}"><i class="bi bi-bookmark-fill"></i></a> --}}

        <a type="button" href="" style="color: aliceblue; text-decoration: none">Bookmarks</a>
        <a type="button" href="" style="color: aliceblue; text-decoration: none;padding-left: 10px">Messages</a>
        
        <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown">
                @php
                  $user_info = \App\Models\User::find($id);
                @endphp
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('storage/image/'.$user_info->image)}}" alt="" height="30" width="30" style="border-radius: 50%"></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('user.dashboard', ['id'=>auth()->user()->id])}}">Profile</a>
                    <a class="dropdown-item" href="{{-- {{route('user.following')}} --}}">Following</a>
                    <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                </div>
            </li>
        </ul>
  </nav>
  <div class="row" style="padding-left: 30px">
    <div class="col col-3">
        <div style="background-color: aquamarine" id="result"></div>
    </div>
</div>
  

  
  