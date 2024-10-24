<x-layout>
    <section id="searchbar" class="pt-12">
        <form class="max-w-lg mx-auto">
            <div class="flex">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                    Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Videos</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Photos</button>
                        </li>
                        {{-- <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                    </li> --}}
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search services ..." required />
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-[#223030] rounded-e-lg border border-[#223030] hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
    </section>
    <section id="servicesList" class="pb-10">
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Services</h2>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-1 lg:grid-cols-3 xl:gap-x-8">
                    <div class="group relative">
                        <div class=" w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-50">
                            {{-- Ini masukin gambar --}}
                            <img src="/Services/Digitally.png" alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                {{-- ini judul, short desc --}}
                                <h3 class="text-base font-bold text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Digitally
                                    </a>
                                </h3>
                                <p class="mt-1 text-xs text-gray-500">{{Str::limit('We serve as a comprehensive solution for businesses, 
                                covering a diverse scale that includes Micro, Small, and Medium Enterprises (UMKM), 
                                local enterprises in the private and public sectors, state-owned corporations, government entities, 
                                and international as well as multinational companies.', 130)}}</p>
                            </div>
                            {{-- rating --}}
                            <p class="text-sm font-medium text-gray-900 ml-5">⭐4.85</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            {{-- Category --}}
                            <h4 class="font-normal text-sm">Category : Photo and Video</h4>
                            {{-- Harga --}}
                            <h3 class="font-normal text-sm">Start from : Rp.500.000</h3>
                        </div>
                    </div>
                    <div class="group relative">
                        <div
                            {{-- Ini masukin gambar --}}
                            class=" w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-50">
                            <img src="/Services/Reka.png" alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                {{-- ini judul, short desc --}}
                                <h3 class="text-base font-bold text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        REKA
                                    </a>
                                </h3>
                                <p class="mt-1 text-xs text-gray-500">{{Str::limit('We are imaginative visionaries excelling in
                                    captivating visuals via photography and videography with a unique spin on branding
                                    and strategy. We curate a distinctive blend of creative inisghts that aims to make a
                                    lasting impression', 130)}}</p>
                            </div>
                            {{-- rating --}}
                            <p class="text-sm font-medium text-gray-900 ml-5">⭐4.8</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            {{-- Category --}}
                            <h4 class="font-normal text-sm">Category : Photo and Video</h4>
                            {{-- Harga --}}
                            <h3 class="font-normal text-sm">Start from : Rp.250.000</h3>
                        </div>
                    </div>
                    <div class="group relative">
                        <div
                            {{-- Ini masukin gambar --}}
                            class=" w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-50">
                            <img src="/Services/Ebisee.png" alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                {{-- ini judul, short desc --}}
                                <h3 class="text-base font-bold text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Ebisee
                                    </a>
                                </h3>
                                <p class="mt-1 text-xs text-gray-500">{{Str::limit('Setiap layanan yang ditawarkan Ebisee, dibuat dengan konsep: 
                                "Jasa yang memberikan manfaat sebesar mungkin kepada klien, dengan harga yang terjangkau."', 130)}}</p>
                            </div>
                            {{-- rating --}}
                            <p class="text-sm font-medium text-gray-900 ml-5">⭐4.9</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            {{-- Category --}}
                            <h4 class="font-normal text-sm">Category : Video dan Video Editing</h4>
                            {{-- Harga --}}
                            <h3 class="font-normal text-sm">Start from : Rp. 150.000</h3>
                        </div>
                    </div>
                    <div class="group relative">
                        <div
                            {{-- Ini masukin gambar --}}
                            class=" w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-50">
                            <img src="/Services/Reka.png" alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                {{-- ini judul, short desc --}}
                                <h3 class="text-base font-bold text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        REKA
                                    </a>
                                </h3>
                                <p class="mt-1 text-xs text-gray-500">{{Str::limit('We are imaginative visionaries excelling in
                                    captivating visuals via photography and videography with a unique spin on branding
                                    and strategy. We curate a distinctive blend of creative inisghts that aims to make a
                                    lasting impression', 130)}}</p>
                            </div>
                            {{-- rating --}}
                            <p class="text-sm font-medium text-gray-900 ml-5">⭐4.8</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            {{-- Category --}}
                            <h4 class="font-normal text-sm">Category : Photo and Video</h4>
                            {{-- Harga --}}
                            <h3 class="font-normal text-sm">Start from : Rp.250.000</h3>
                        </div>
                    </div>
                    <!-- More products... -->
                </div>
            </div>
        </div>
    </section>
</x-layout>
