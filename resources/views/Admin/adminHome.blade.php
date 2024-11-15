<x-layout>
    <div class="pt-24">
        a
        {{ $service->name }}
        <br>
        {{ $service->short_description }}
        <br>
        {{ $service->category->name }}
        <br>
        {{ $service->admin->username }}
        <br>
        {{ $service->rating }}
        <br>
        {{ $service->email }}
        <div class="mx-auto mb-12 mt-16 grid max-w-lg grid-cols-1 items-centergap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-7xl lg:grid-cols-3">
            @foreach ($packages as $package)
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
                <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-[#2caaaa] px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Edit Package</a>
              </div>
            </div>
            @endforeach
            <div class="flex flex-col justify-content-center align-items-center mx-5 h-full rounded-3xl bg-[#223030] p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10 mt-5">
                <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-[#2caaaa] px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Add Package</a>
            </div>
        </div>
        
    </div>
</x-layout>
