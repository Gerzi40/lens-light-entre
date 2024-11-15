<x-layout>
<section class="pt-24">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-3xl font-bold text-black">Add Package</h2>
            <form method="POST" action="{{ route('adminStorePackage') }}" enctype="multipart/form-data">
                @csrf   
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Package Name</label>
                        <input type="text" class="bg-white border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-md" placeholder="Contoh: Video Youtube, Instagram" id="packageName" name="packageName">
                        @error('packageName')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-2xl font-medium text-black ">Description</label>
                        <textarea id="description" rows="4" class="flex sm:col-span-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full h-[100px] p-2.5 resize-none" placeholder="Tulis penjelasan disini" name="description"></textarea>
                        @error('description')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Price</label>
                        <input type="text" class="bg-white border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-md" placeholder="Contoh: 22500" id="price" name="price">
                        @error('price')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Duration</label>
                        <input type="text" class="bg-white border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-md" placeholder="Contoh: 3-5 days" id="duration" name="duration">
                        @error('duration')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Revision</label>
                        <input type="text" class="bg-white border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-md" placeholder="Contoh: 2" id="revisions" name="revisions">
                        @error('revisions')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-[#65668B] hover:bg-[#7981A2] rounded-lg focus:ring-4 focus:ring-[#7981A2]">
                    Add Package
                </button>
            </form>
        </div>
</section>
</x-layout>