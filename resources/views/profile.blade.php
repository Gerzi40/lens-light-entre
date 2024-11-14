<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-header></x-header>
    <section id="updateProfile">
        <div class="mx-auto w-64 text-center pt-10">
            <div class="relative w-64 group">
                <!-- Profile picture -->
                <img class="w-64 h-64 rounded-full" src="/pp/marvell.png" alt="" />
                
                <!-- Hover overlay and SVG icon -->
                <div class="absolute inset-0 bg-gray-200 opacity-0 group-hover:opacity-60 z-10 rounded-full flex justify-center items-center transition-opacity duration-500 cursor-pointer">
                    <img class="w-12 hidden group-hover:block" src="https://www.svgrepo.com/show/33565/upload.svg" alt="Upload" />
                </div>
            </div>
        </div>
        
        <div class="w-full flex items-center justify-center bg-white">
            <div class="bg-white p-10 w-full max-w-md">
            
            <form action="{{ route('updateuser') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                <label for="username" class="block text-sm font-bold text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="{{Auth::user()->username}}" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
                </div>

                <div>
                <label for="email" class="block text-sm font-bold text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{Auth::user()->email}}" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
                </div>

                <div>
                <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
                <input type="password" id="password" name="password" value="{{Auth::user()->password}}" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
                </div>
            
                <div>
                <label for="dob" class="block text-sm font-bold text-gray-700">DOB</label>
                <input type="date" id="dob" name="dob" value="{{Auth::user()->dob}}" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
                </div>


                <div class="flex justify-center">
                <button type="submit" class="rounded-lg relative inline-flex group items-center justify-center px-5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:shadow-none shadow-lg bg-gradient-to-tr from-[#223030] to-[#324343] text-white">
                    <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
                    <span class="relative">Update Profile</span>
                </button>
                </div>

            </form>
            </div>
        </div>
    </section>
</body>
</html>