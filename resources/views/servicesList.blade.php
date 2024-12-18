<x-layout>
    <section id="searchbar" class="pt-32">
        <form action="/servicesList" method="GET" class="max-w-lg mx-auto" id="form" style="border-width:1px; border-radius: 5px; border-color: gray;">
            <div class="flex">
                <select name="category" onchange="document.getElementById('form').submit()" name="category" style="border: none;" class="bg-gray-50" style="border-radius: 4px">
                    <option value="">
                        All categories
                    </option>
                    @foreach ($categories as $category)  
                            <option value="{{$category->id}}" {{ request('category') == $category->id ? 'selected' : '' }} class="inline-flex w-full px-4 py-2">{{$category->name}}</button>
                    @endforeach
                </select>

                <div class="relative w-full">
                    <input type="search" id="search-dropdown" name="service_name"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search services ..." required />
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-[#223030] border border-[#223030] hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="border-radius: 4px">
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
            <div class="mx-auto max-w-2xl px-4 py-5 sm:px-6 sm:py-14 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Services</h2>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-1 lg:grid-cols-3 xl:gap-x-8">
                    @foreach ($lists as $service)
                    <div class="group relative border p-2">
                        <div class=" w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-50">
                            {{-- Ini masukin gambar --}}
                            <img src={{$service->link_photo}} alt=""
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="flex flex-col justify-between">
                            {{-- upper --}}
                            <div class="mt-4 flex justify-between">
                                <div>
                                    {{-- ini judul, short desc --}}
                                    <h3 class="text-base font-bold text-gray-700">
                                        <a href="{{url('/serviceDetails/' . $service->id)}}">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{$service->name}}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-xs text-gray-500">{{Str::limit($service->short_description, 150)}}</p>
                                </div>
                                {{-- rating --}}
                                <p class="text-sm font-medium text-gray-900 ml-5">⭐{{$service->rating}}</p>
                            </div>
                            {{-- lower --}}
                            <div class="mt-4 flex justify-between">
                                {{-- Category --}}
                                <h4 class="font-normal text-xs">Category : {{$service->category->name}}</h4>
                                {{-- Harga --}}
                                <h3 class="font-normal text-xs">Start from : Rp {{number_format($service->start_from, 0, ',', '.')}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- More products... -->
                </div>
            </div>
        </div>
    </section>
    <script>
        // function selectCategory(category) {
        //     document.getElementById('categoryInput').value = category;
        // }
        // console.log(document.getElementById('categoryInput'));
        function selectCategory(category) {
        document.getElementById('categoryInput').value = category;
        document.querySelector('form').submit();
        }
    </script>
</x-layout>
