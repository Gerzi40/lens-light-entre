<x-layout>
    <section id="sect1" class="pt-32 pb-10">
        <div class="flex justify-between h-96 px-12 gap-10">
            {{-- img --}}
            <div class="w-full ">
                <img src={{$service->link_photo}} alt="digitally"
                class="h-full w-full object-cover object-center lg:h-96 lg:w-auto">
            </div>
            {{-- short desc --}}
            <div class="flex flex-col w-full justify-center">
                <h3 class="font-semibold text-3xl mb-4">{{$service->name}}</h3>
                <p class="text-lg font-base">
                    {{$service->short_description}}
                </p>
                <h4>⭐{{$service->rating}}</h4>
                <div class="mt-6">
                  <a href= '{{$service->link_porto}}' target="blank"
                  class="relative inline-block text-2xl font-semibold text-black transition duration-300 ease-in-out 
                  before:absolute before:-bottom-1 before:left-0 before:h-[2px] before:w-full before:scale-x-0 
                before:bg-black before:origin-left before:transition-transform before:duration-300 hover:before:scale-x-100">
                  Portofolio
                </a>
              </div>
            </div>
        </div>
    </section>
    <section id="sect2" class="pt-10 pb-10">
        <div class="">
            <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
                <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
                  <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#959D90] to-[#223030] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="mx-auto max-w-4xl text-center">
                  <p class="mt-2 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">Our Packages</p>
                </div>
                <div class="mx-auto mb-12 mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 lg:max-w-7xl lg:grid-cols-3">
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
                      <a href="{{url('/payment/' . $package->id)}}" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-[#2caaaa] px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Order Now</a>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
        </div>
    </section>
</x-layout>