@php
    $currentPage = Route::currentRouteName();
    $user = Auth::user();
@endphp

@auth
    @if (Auth::guard('admin')->check())
    {{-- utk admin --}}
    <header class="bg-transparent absolute top-0 left-0 w-full z-10">
        <div class="flex justify-between h-30">
            <div class="flex items-center w-full">
                <a href="/"><img src="/logo/logolens&lightnewbg.png" alt="OurLogo" class="h-20 w-30 mr-3"></a>

                <a href="{{ route('adminHome') }}" class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'adminHome' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'adminHome' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Dashboard</span>
                </a>

                <a href="{{ route('adminBooking') }}" class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'adminBooking' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'adminBooking' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Manage Bookings</span>
                </a>

                <a href="{{ route('getUser') }}" 
                class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'customerChat' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'customerChat' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Chat</span>
                </a> 
            </div>
            <div class="flex items-center gap-x-3">
                <p class="mr-3 whitespace-nowrap">Hi, {{ Auth::user()->username }}</p>
                <form action="{{ route('logout') }}" method="POST" class="mr-5">
                    @csrf
                    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
                </form>
            </div>
        </div>
    </header>
    @else
    {{-- utk user --}}
    <header class="bg-transparent absolute top-0 left-0 w-full z-10">
        <div class="flex justify-between h-30">
            <div class="flex items-center">
                <a href="/"><img src="/logo/logolens&lightnewbg.png" alt="OurLogo" class="h-20 w-30 mr-3"></a>
    
                <a href="{{ route('home') }}" class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'home' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'home' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Home</span>
                </a> 

                <a href="{{ route('servicesList') }}" class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'servicesList' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'servicesList' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Services</span>
                </a>
    
                <a href="{{ route('bookingHistory') }}" 
                class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'bookingHistory' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'bookingHistory' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Bookings</span>
                </a>
    
                <a href="{{ route('aboutUs') }}" 
                class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'aboutUs' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'aboutUs' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">About Us</span>
                </a>
    
                <a href="{{ route('customerChat') }}" 
                class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'customerChat' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'customerChat' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Chat</span>
                </a>
            </div>
    
            <div class="flex items-center gap-x-3">
                <a href={{route('profilePage')}} class="whitespace-nowrap">Hi, {{ Auth::user()->username }}</a>
                <a href="/profile"><img src="/profile_picture/default.jpg" alt="Orang" class="h-9 rounded-3xl"></a>
                <form action="{{ route('logout') }}" method="POST" class="mr-5">
                    @csrf
                    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
                </form>
            </div>
        </div>
    </header>
    @endif
@else
<header class="bg-transparent absolute top-0 left-0 w-full z-10">
    <div class="flex justify-between h-30">
        <div class="flex items-center">
            <a href="/"><img src="/logo/logolens&lightnewbg.png" alt="OurLogo" class="h-20 w-30 mr-3"></a>

            <a href="{{ route('home') }}" class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'home' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'home' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Home</span>
            </a>       
            <a href="{{ route('servicesList') }}" class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'servicesList' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'servicesList' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Services</span>
            </a>

            <a href="{{ route('bookingHistory') }}" 
            class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'bookingHistory' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'bookingHistory' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Bookings</span>
            </a>

            <a href="{{ route('aboutUs') }}" 
            class="group text-black font-medium mx-5 transition-all duration-600 ease-in-out {{ $currentPage == 'aboutUs' ? 'active' : '' }}"><span class="bg-left-bottom bg-gradient-to-r from-black to-black {{ $currentPage == 'aboutUs' ? 'bg-[length:100%_2px]' : 'bg-[length:0%_2px]' }} bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">About Us</span>
            </a>
        </div>

        <div class="flex items-center justify-center">
            <div class="flex flex-row mr-10 gap-5">
                <a href="/login">
                    <button class="bg-white border-2 border-[#223030] rounded-md px-5 py-2 hover:bg-[#223030] hover:text-white transition duration-300 ease-in-out">
                        Log In
                    </button>
                </a>
                <a href="/register">
                    <button class="bg-[#223030] border-2 border-[#223030] rounded-md px-5 py-2 text-white hover:text-[#223030] hover:bg-white transition duration-300 ease-in-out">
                        Sign Up
                    </button>
                </a>
            </div>
        </div>
    </div>
</header>
@endauth
