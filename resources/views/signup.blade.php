<!DOCTYPE html>
<html lang="english">
  <head>
    <title>{{config('app.name')}}</title>
    <meta property="og:title" content="signup - exported project" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container mx-auto flex justify-center pt-[100px]">
      <div class="bg-slate-300 w-[33%] p-5 rounded-2xl">
          <form class="flex flex-col space-y-5" action="{{route('user.signup')}}" method="post">
              @csrf
              <div>
                  <h3 class="text-[26px] font-bold text-slate-700">Signup</h3>
                  <small class="text-[12px] text-slate-700">Please fill in this form to create an account.</small>
              </div>

              @error('name')
                <div>
                  <p style="color: red">name is required</p>
                </div>
              @enderror
              <input name="name" class="h-[35px] w-[85%] px-3 rounded-full focus:outline-none" type="text" placeholder="Enter Name" autofocus>
              
              @error('email')
                <div>
                  <p style="color: red">email is required</p>
                </div>
              @enderror
              <input name="email" class="h-[35px] w-[85%] px-3 rounded-full focus:outline-none" type="email" placeholder="Enter Email">

              @error('address')
                <div>
                  <p style="color: red">address is required</p>
                </div>
              @enderror
              <input name="address" class="h-[35px] w-[85%] px-3 rounded-full focus:outline-none" type="text" placeholder="Enter Address">

              @error('password')
                <div>
                  <p style="color: red">password is required</p>
                </div>
              @enderror
              <input name="password" class="h-[35px] w-[85%] px-3 rounded-full focus:outline-none" type="password" placeholder="Enter Password">
              <input name="password_confirmation" class="h-[35px] w-[85%] px-3 rounded-full focus:outline-none" type="password" placeholder="Re-type Password">

              <div>
                  <button type="submit" class="bg-sky-400 hover:text-sky-400 hover:bg-slate-50 w-[25%] py-1 rounded-full text-slate-50 font-bold">SignUp</button>
                  <p class="text-[14px] text-slate-700">Already got an account? Login <a class="text-sky-600 hover:underline" href="{{route('login')}}">here</a></p>
              </div>
          </form>
      </div>
  </div>


  </body>
</html>
