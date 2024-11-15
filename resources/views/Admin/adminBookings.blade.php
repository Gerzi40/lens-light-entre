<x-layout>
    <section class="pt-24 pb-20 px-24 h-screen">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Transaction ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Package
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rating
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($transactions->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center px-6 py-4 text-gray-500">
                                No transactions found.
                            </td>
                        </tr>
                    @else
                        @foreach ($transactions as $transaction)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$transaction->id}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$transaction->transaction_date}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$transaction->package->packageName}} 
                                </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($transaction->price, 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{-- {{ $transaction->status->name}} --}}
                                    {{-- <form action="">
                                        <select onchange="document.getElementById('form').submit()" name="category" style="border: none;" class="bg-gray-50" style="border-radius: 4px">
                                            <option value="">
                                                All categories
                                            </option>
                                            @foreach ($categories as $category)  
                                                    <option value="{{$category->id}}" {{ request('category') == $category->id ? 'selected' : '' }} class="inline-flex w-full px-4 py-2">{{$category->name}}</button>
                                            @endforeach
                                        </select>
                                    </form> --}}
                                </td>
                                @if ($transaction->rating != 0)
                                <td class="px-6 py-4">
                                    ⭐{{$transaction->rating}}
                                </td>
                                @else
                                <td class="px-6 py-4">
                                    Not Rated yet!
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
</x-layout>