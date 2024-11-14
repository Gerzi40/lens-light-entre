<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
</head>
<body>
    <x-header></x-header>
    <section id="updateProfile">
        <div enctype="multipart/form-data" id="form-file" class="profile-pic mx-auto w-64 text-center pt-10 mt-8">
            <label class="-label" for="file">
                <span>
                    <svg class="w-6 h-6 text-white hover:inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"/>
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </span>
                <span>Change Image</span>
            </label>
            <input id="file" type="file" onchange="loadFile(event)" class="hidden" name="image"/>
            <img src="{{ asset('profile_picture/default.jpg') }}" id="output" width="200" class="border-[1px] border-solid border-gray-300" />
        </div>
        <div class="w-full flex items-center justify-center bg-white">
            <div class="bg-white p-10 w-full max-w-md">
            
            <form action="{{ route('updateUser') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                <label for="username" class="block text-sm font-bold text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="{{Auth::user()->username}}" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent">
                </div>

                <div>
                <label for="email" class="block text-sm font-bold text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{Auth::user()->email}}" class="mt-1 w-full px-4 py-2 border rounded-lg bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" disabled>
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
    <script>
        var loadFile = function (event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</body>
</html>