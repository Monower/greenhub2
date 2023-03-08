<!DOCTYPE html>
<html lang="english">
  <head>
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="bg-slate-50 font-roboto">

    <div class="container mx-auto flex justify-center items-center">
      <div class="bg-slate-300 w-[400px] mt-[100px] rounded-2xl">
          <form class="flex flex-col m-5 space-y-5" action="{{route('user_login')}}" method="post">
              @csrf
              <div>
                  <h3 class="text-[26px] font-bold text-slate-700">Login</h3>
                  <small class="text-[12px] text-slate-700">Please fill in this form to login.</small>
              </div>
              @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-red-400">{{$error}}</p>
                @endforeach
              @endif
              <input class="w-[80%] h-[35px] px-3 rounded-full focus:outline-none" type="email" placeholder="Email" name="email" autofocus>
              <input class="w-[80%] h-[35px] px-3 rounded-full focus:outline-none" type="password" placeholder="Password" name="password">
              <div>
                  <button class="bg-sky-400 hover:text-sky-400 hover:bg-slate-50 w-[25%] py-1 rounded-full text-slate-50 font-bold">Login</button>
                  <p class="text-[14px] text-slate-700">Dont have an account? Signup <a class="text-sky-600 hover:underline" href="{{route('signup')}}">here</a></p>
              </div>
          </form>
      </div>
    </div>
    
  </body>
</html>
