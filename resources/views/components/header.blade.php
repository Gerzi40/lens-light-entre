<header class="bg-slate-100">
    <div class="flex justify-between h-30 ">
        <div class="flex items-center">
            <a href="/"><img src="/logo/logolens&lightnewbg.png" alt="OurLogo" class="h-20 w-30 mr-3"></a>
            <a href="/" class="mx-5">Home</a>
            <a href="/servicesList" class="mx-5">Services</a>
            <a href="/bookingHistory" class="mx-5">Bookings</a>
            <a href="/aboutus" class="mx-5">About Us</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </div>
        <div class="flex items-center">
            <a href="/profile" class="mr-3">Hi, John</a>
            <a href="/profile"><img src="/pp/marvell.png" alt="Orang" class="h-9 mr-6 rounded-3xl"></a>
        </div>
    </div>
</header>