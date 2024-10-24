<x-layout>
    <section id="sect1" class="pt-10 pb-10">
        <div class="flex flex-wrap h-96 px-12">
            {{-- img --}}
            <div class="w-full lg:w-1/2 ">
                <img src="/Services/Ebisee.png" alt="digitally"
                class="h-full w-full object-cover object-center lg:h-96 lg:w-auto">
            </div>
            {{-- short desc --}}
            <div class="flex flex-col w-full lg:w-1/2 justify-center">
                <h3 class="font-semibold text-3xl mb-4">Ebisee</h3>
                <p class="text-lg font-base">
                    Setiap layanan yang ditawarkan Ebisee, dibuat dengan konsep: 
                    "Jasa yang memberikan manfaat sebesar mungkin kepada klien, dengan harga yang terjangkau.
                    Ebisee tidak pernah berhenti berinovasi dengan selalu mengikuti trend terkini, 
                    teknologi terbaru dan menggunakannya demi memberikan hasil terbaik kepada klien kami.
                </p>
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
                {{-- <p class="mx-auto mt-6 max-w-2xl text-pretty text-center text-lg font-medium text-gray-600 sm:text-xl/8">Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.</p> --}}
                <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-7xl lg:grid-cols-3">
                  <div class="mx-5 h-full rounded-3xl bg-gray-900 p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10">
                    <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-indigo-400">Video Youtube, Instagram</h3>
                    <p class="mt-4 flex items-baseline gap-x-2">
                      <span class="text-2xl font-semibold tracking-tight text-white">Rp. 225.000</span>
                    </p>
                    <p class="mt-6 text-base leading-7 text-gray-300">Anda bisa menggunakan untuk berbagai tujuan, mulai dari video iklan Youtube, Facebook, Instagram ataupun untuk mempromosikan suatu produk serta jasa di website Anda sendiri.</p>
                    {{-- <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300 sm:mt-10">
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited products
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited subscribers
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Advanced analytics
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Dedicated support representative
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Marketing automations
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Custom integrations
                      </li>
                    </ul> --}}

                    <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Get started today</a>
                  </div>
                  <div class="mx-5 h-full rounded-3xl bg-gray-900 p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10">
                    <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-indigo-400">Video Animasi 2D</h3>
                    <p class="mt-4 flex items-baseline gap-x-2">
                      <span class="text-2xl font-semibold tracking-tight text-white">Rp. 225.000</span>
                      {{-- <span class="text-base text-gray-400">/month</span> --}}
                    </p>
                    <p class="mt-6 text-base leading-7 text-gray-300">Video animasi 2D biasanya digunakan sebagai explainer video, yaitu video animasi yang menjelaskan suatu produk atau jasa.</p>
                    {{-- <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300 sm:mt-10">
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited products
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited subscribers
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Advanced analytics
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Dedicated support representative
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Marketing automations
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Custom integrations
                      </li>
                    </ul> --}}

                    <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Get started today</a>
                  </div>
                  <div class="mx-5 h-full rounded-3xl bg-gray-900 p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10">
                    <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-indigo-400">Video Animasi 3D</h3>
                    <p class="mt-4 flex items-baseline gap-x-2">
                      <span class="text-2xl font-semibold tracking-tight text-white">Rp. 325.000</span>
                      {{-- <span class="text-base text-gray-400">/month</span> --}}
                    </p>
                    <p class="mt-6 text-base leading-7 text-gray-300">
                        Pembuatan video 3D umumnya membutuhkan waktu lama dan biaya besar.
                        Tapi kami di Ebisee berhasil menemukan metode yang mampu menghasilkan video 3D berkualitas, 
                        hanya dalam hitungan hari dengan harga yang lebih murah dibanding lainnya.
                    </p>
                    {{-- <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300 sm:mt-10">
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited products
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Unlimited subscribers
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Advanced analytics
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Dedicated support representative
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Marketing automations
                      </li>
                      <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Custom integrations
                      </li>
                    </ul> --}}
                    <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Get started today</a>
                  </div>
                </div>
              </div>
              
        </div>
    </section>
</x-layout>