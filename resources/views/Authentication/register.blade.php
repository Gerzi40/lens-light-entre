<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#E8D9CD] h-screen">
    <div class="flex h-screen">
      <div class="lg:flex md:flex-end w-1/2 h-full">
        <img src="{{ asset('Assets/SignUpBG.png') }}" class="object-cover" alt="SignUp Background">
      </div>
      <div class="w-full lg:w-1/2 flex items-center justify-center bg-white">
        <div class="bg-white border rounded-lg py-3 px-10 w-full max-w-md">
          <h2 class="text-4xl font-semibold text-gray-800 mb-6 text-center">Register</h2>
          
          <form action="{{ route('register.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
              <label for="username" class="block text-sm font-bold text-gray-700">Username</label>
              <input type="text" id="username" name="username" value="{{ old('username') }}" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
              @error('username')
                <p class="text-red-800">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="email" class="block text-sm font-bold text-gray-700">Email</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
              @error('email')
                <p class="text-red-800">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
              <input type="password" id="password" name="password" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
              @error('password')
                <p class="text-red-800">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="confirm_password" class="block text-sm font-bold text-gray-700">Confirm Password</label>
              <input type="password" id="confirm_password" name="password_confirmation" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
              @error('password_confirmation')
                <p class="text-red-800">{{ $message }}</p>
              @enderror
            </div>
          
            <div>
              <label for="dob" class="block text-sm font-bold text-gray-700">DOB</label>
              <input type="date" id="dob" name="dob" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
              @error('dob')
              <p class="text-red-800">{{ $message }}</p>
              @enderror
            </div>

            <p class="text-sm text-gray-600 mt-4">
              Already have an account? <a href="{{ route('login') }}" class="text-gray-800 font-semibold hover:underline">Login</a>
            </p>

            <div class="flex justify-center">
              <button type="submit" class="rounded-lg relative inline-flex group items-center justify-center px-5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:shadow-none shadow-lg bg-gradient-to-tr from-[#223030] to-[#324343] text-white">
                <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
                <span class="relative">Register</span>
              </button>
            </div>

            <p class="text-center text-xs text-gray-400 mt-2">
              By creating an account, you have read and agree to Lens&Light <a href="#" class="underline">Privacy Policy</a> and <a href="#" class="underline">Terms of Use</a>.
            </p>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
