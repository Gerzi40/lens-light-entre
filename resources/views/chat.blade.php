<x-layout>
        <div class="pt-36 pb-40">
            <div class="w-auto bg-white border-r border-gray-300">
                <!-- Sidebar Header -->
                <header class="p-4 border-b border-gray-300 flex justify-between items-center bg-white text-slate-900">
                  <h1 class="text-2xl font-semibold">Services</h1>
                  <div class="relative">
                    <button id="menuButton" class="focus:outline-none">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path d="M2 10a2 2 0 012-2h12a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z" />
                      </svg>
                    </button>
                    <!-- Menu Dropdown -->
                  </div>
                </header>
              
                <!-- Contact List -->
                <div>
                    @foreach ($chatRooms as $CR)
                    <a href="/chatDetail/{{$CR->id}}">
                        <div class="mb-1 px-3 ">
                        <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
                            <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                            <img src="{{$CR->admin->serviceProvider->link_photo}}" alt="User Avatar" class="w-12 h-12 rounded-full">
                            </div>
                            <div class="flex-1">
                            <h2 class="text-lg font-semibold">{{ $CR->admin->username }}</h2>
                            <p class="text-gray-600">{{optional($CR->chats->last())->message ?? 'No message available'}}</p>
                            </div>
                        </div>
                        </div>
                    </a>
                    @endforeach
                </div>
              </div>
            </div>
            
            
        </div>
        
</x-layout>
