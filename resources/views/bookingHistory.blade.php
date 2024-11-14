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
                            Company
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
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
                                    {{$transaction->serviceProvider->name}}
                                </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($transaction->price, 2, ',', '.') }}
                                </td>
                                @if ($transaction->israted === 0)
                                <td class="px-6 py-4">
                                    <a href="/bookingHistory/{{$transaction->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Rate</a>
                                </td>
                                @else
                                <td class="px-6 py-4">
                                    Rated
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