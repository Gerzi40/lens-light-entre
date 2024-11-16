<x-layout>
    <div class="pt-24">
      <div class="flex flex-col w-3/4 mx-auto mt-6 p-6 bg-white border border-gray-200 rounded-lg shadow">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Information</h5>
        <div class="flex flex-row gap-3">
          <p class="font-medium text-gray-700 w-20">Name</p>
          <p class="font-normal text-gray-700 text-justify">: {{ $service->name }}</p>
        </div>
        <div class="flex flex-row gap-1">
          <p class="font-medium text-gray-700 w-20 mr-2">Description</p>
          <p>:</p>
          <p class="font-normal text-gray-700 text-justify">{{ $service->short_description }}</p>
        </div>
        <div class="flex flex-row gap-3">
          <p class="font-medium text-gray-700 w-20">Category</p>
          <p class="font-normal text-gray-700 text-justify">: {{ $service->category->name }}</p>
        </div>
        <div class="flex flex-row gap-3">
          <p class="font-medium text-gray-700 w-20">Rating</p>
          <p class="font-normal text-gray-700 text-justify">: {{ $service->rating }}</p>
        </div>
        <div class="flex flex-row gap-3">
          <p class="font-medium text-gray-700 w-20">Email</p>
          <p class="font-normal text-gray-700 text-justify">: {{ $service->email }}</p>
        </div>
      </div>
      <div class="w-3/4 flex flex-col gap-4 mx-auto mt-10">
        <h1 class="text-4xl font-bold text-gray-900">Your Package</h1>
        @if (session()->has('success'))
        <div class="alert alert-success flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <div class="text-sm font-medium">
              {{session()->get('success')}}
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
      </div>
      <div class="mx-auto mb-12 mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-7xl lg:grid-cols-3">
          @forelse ($packages as $package)
          <div class="flex flex-col justify-between mx-5 h-full rounded-3xl bg-[#223030] p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10">
            <div>
                <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-[#d5f4f4]">{{$package->packageName}}</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                  <span class="text-2xl font-semibold tracking-tight text-white">
                    Rp {{number_format($package->price, 0, ',', '.')}}
                  </span>
                </p>
                <p class="mt-6 text-base leading-7 text-gray-300">{{$package->description}}</p>
            </div>  
            <div>
              <h2 class="mt-2 text-lg text-slate-200">Working Duration  : {{$package->duration}}</h2>
              <h3 class="mt-2 text-lg text-slate-200">Revision : {{$package->revisions}}</h3>
              <a href="{{ route('showAdminUpdatePackage', $package->id) }}" aria-describedby="tier-enterprise" class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm bg-[#2caaaa] hover:bg-[#187777] focus:ring-[#103a3a] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Edit Package</a>
              <form action="{{ route('adminDeletePackage', $package->id) }}" method="POST" class="w-full">
                @csrf
                @method('DELETE') 
                <button type="submit" class="block rounded-md px-3.5 py-2.5 w-full text-center text-sm font-semibold text-white shadow-sm bg-[#2caaaa] hover:bg-[#187777] focus:ring-[#103a3a] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">
                    Delete Package
                </button>
              </form>
            </div>
          </div>
          @empty
          <div class="flex justify-center items-center w-full text-center py-8 col-span-3">
              <p class="text-lg font-semibold text-gray-600 text-nowrap">You don't have any package right now. Please Add More Package !!!</p>
          </div>
          @endforelse
      </div>
      <a href="{{ route('adminAddPackage') }}" aria-describedby="tier-enterprise" class="w-3/4 mx-auto my-8 block rounded-md px-4 py-5 text-center text-sm font-semibold text-white shadow-sm bg-[#2caaaa] hover:bg-[#187777] focus:ring-[#103a3a] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Add More Package</a>
    </div>
</x-layout>
