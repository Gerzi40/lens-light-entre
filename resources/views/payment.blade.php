<x-layout>
    <div class="flex flex-row gap-8 bg-[#EFEFE9] h-screen px-20">
        <div class="w-1/2">
            <p class="font-semibold text-2xl my-8">Choose Payment Method</p>
            <div class="p-8 mb-8 bg-[#E8D9CD]">
                <p class="font-semibold text-xl mb-8">E-Wallet</p>
                <ul class="grid grid-cols-2 p-3 gap-6 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioBgHoverButton1">
                    <li class="">
                        <div class="bg-white flex items-center p-2 rounded hover:bg-gray-100 gap-4 cursor-pointer" onclick="document.getElementById('default-radio-1').click();">
                            <input id="default-radio-1" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/Dana.png') }}" name="paymentOption" checked>
                            <div class="flex flex-col">
                                <img src="{{ asset('Assets/Payment/Dana.png') }}" class="w-[300px] h-[100px]" alt="Dana Wallet">
                                <label for="default-radio-1" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">Dana Wallet</label>
                            </div>
                        </div>
                    </li>
                <li class="bg-white">
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 gap-4 h-full cursor-pointer" onclick="document.getElementById('default-radio-2').click();">
                        <input id="default-radio-2" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/OVO.png') }}" name="paymentOption">
                        <div class="flex flex-col">
                            <img src="{{ asset('Assets/Payment/OVO.png') }}" class=" w-full h-[100px]" alt="">
                            <label for="default-radio-2" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">OVO</label>    
                        </div>
                    </div>
                </li>
                <li class="bg-white">
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 gap-4 cursor-pointer" onclick="document.getElementById('default-radio-3').click();">
                        <input id="default-radio-3" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/QRIS.png') }}" name="paymentOption">
                        <div class="flex flex-col">
                            <img src="{{ asset('Assets/Payment/QRIS.png') }}" class=" w-[300px] h-[100px]" alt="">
                            <label for="default-radio-3" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">QRIS</label>    
                        </div>
                    </div>
                </li>
                <li class="bg-white">
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 gap-4 cursor-pointer" onclick="document.getElementById('default-radio-4').click();">
                        <input id="default-radio-4" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/Gopay.png') }}" name="paymentOption">
                        <div class="flex flex-col">
                            <img src="{{ asset('Assets/Payment/Gopay.png') }}" class="w-[300px] h-[100px]" alt="">
                            <label for="default-radio-4" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">Gopay</label>    
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2">
            <p class="font-semibold text-2xl my-8">Payment Details</p>
            <div class="flex flex-col border bg-[#ECECEC] border-[#B4B4B4] divide-y divide-[#B4B4B4]">
                <div class="flex flex-row justify-between p-6">
                    <p class="flex items-center justify-center text-[23px] font-semibold">PEMBAYARAN DARI</p>
                    <img src="{{ asset('logo/logolens&lightnewbg.png') }}" alt="" class="w-[250px] h-[100px]">
                </div>
                <div class="p-6">
                    <div class="flex justify-between font-medium text-[23px]">
                        <p>Nomor Pembayaran</p>
                        <p>{{ session('invoiceNumber') }}</p>
                    </div>
                    <div class="flex justify-between font-medium text-[23px] mt-2">
                        <p>Created</p>
                        <p>2024-10-31 17:41:09</p>
                    </div>
                    <div class="flex justify-between font-medium text-[23px]">
                        <p>Expiry</p>
                        <p>2024-10-31 22:41:09</p>
                    </div>
                    <div class="flex justify-between font-semibold text-[23px] mt-2 mb-8">
                        <p>Total</p>
                        <p class="text-[#65668B]">Rp {{ number_format(session('price'), 2, ',', '.') }}</p>
                    </div>
                </div>   
                <div class="flex flex-row justify-between p-6">
                    <p class="flex items-center justify-center text-[19px]">PEMBAYARAN DENGAN</p>
                    <img src="{{ asset('Assets/Payment/Dana.png') }}" id="selectedPayment" class="w-[180px] h-[70px]">
                </div>
                <form method="POST" class="w-full flex items-center justify-center">
                    @csrf
                    <input type="text" class="hidden" value="{{ session('usedCoupon') }}" name="coupon">
                    <button type="submit" class="flex w-[90%] p-2 m-5 items-center justify-center bg-[#223030] hover:bg-[#324343] text-[21px] font-semibold rounded-md text-white">Bayar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        var loadFile = function (event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        document.addEventListener('DOMContentLoaded', function() {
            const radioButtons = document.querySelectorAll('input[name="paymentOption"]');
            const selectedImage = document.getElementById('selectedPayment');

            function updateImage() {
                const selectedValue = document.querySelector('input[name="paymentOption"]:checked').value;
                selectedImage.src = selectedValue;
            }

            radioButtons.forEach(radio => {
                radio.addEventListener('change', updateImage);
            });

            updateImage();
        });
    </script>
</x-layout>