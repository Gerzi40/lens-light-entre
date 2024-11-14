<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#E8D9CD] h-screen">
    <div class="flex h-screen">
      <div class="lg:flex md:flex-end w-1/2 h-full">
        <img src="{{ asset('Assets/SignUpBG.png') }}" class="object-cover" alt="SignUp Background">
      </div>

      <div class="w-full lg:w-1/2 flex items-center justify-center bg-white">
        <div class="bg-white border rounded-lg p-10 w-full h-4/5 max-w-md">
          <h2 class="text-4xl font-semibold text-gray-800 mb-6 text-center">Login</h2>
          @if (session()->has('success'))
          <div class="alert alert-success flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
              <div class="text-sm font-medium">
                {{session()->get('fail')}}
              </div>
          </div>
          @endif
          @if (session()->has('fail'))
          <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
              <div class="text-sm font-medium">
                {{session()->get('fail')}}
              </div>
          </div>
          @endif
          <form action="{{ route('login.submit') }}" method="POST" class="gap-y-10">
            @csrf
            <div>
              <label for="email" class="block text-sm font-bold text-gray-700">Email</label>
              <input type="text" id="email" name="email" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
              @if ($errors->has('email'))
                <p class="text-red-800">{{$errors->first('email')}}</p>
              @endif
            </div>
  
            <div>
              <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
              <input type="password" id="password" name="password" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
              @if ($errors->has('password'))
                <p class="text-red-800">{{$errors->first('password')}}</p>
              @endif
            </div>
  
            <a href="#" class="text-sm mt-4 text-gray-800 font-semibold hover:underline">Forgot Password?</a>

            <div class="flex justify-center mt-24">
              <button type="submit" class="rounded-lg relative inline-flex group items-center justify-center px-10 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:shadow-none shadow-lg bg-gradient-to-tr from-[#223030] to-[#324343] text-white">
                <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
                <span class="relative">Login</span>
              </button>
            </div>
            <p class="text-center">
                Dont have an account?
                <a href={{route('register')}} class="text-sm text-center mt-4 text-gray-800 font-semibold hover:underline">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
