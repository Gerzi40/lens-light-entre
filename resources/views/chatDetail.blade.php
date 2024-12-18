<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="">
        <div class="sm:p-6 flex flex-col" id="chat" style="height: calc(100vh - 60px); ">
            {{-- Header --}}
            <div class="flex items-center justify-between py-3 border-b-2 border-gray-200">
                <div class="relative flex items-center space-x-4">
                    <a href="/chat" class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                        Back
                    </a>
                    <div class="relative">
                        <span class="absolute text-green-500 right-0 bottom-0">
                            <svg width="20" height="20">
                            <circle cx="8" cy="8" r="8" fill="currentColor"></circle>
                            </svg>
                        </span>
                    <img src="{{$chatRoom->admin->serviceProvider->link_photo}}" alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full">
                    </div>
                    <div class="flex flex-col leading-tight">
                        <div class="text-2xl mt-1 flex items-center">
                            <span class="text-gray-700 mr-3">{{ $chatRoom->admin->username }}</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Chat Message --}}
            <div class="flex-1 overflow-y-scroll p-3 space-y-3 scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch" id="messages">
                @foreach ($chatRoom->chats as $chat)
                    @if ($chat->senderuser == 1)
                    <div class="chat-message">
                        <div class="flex items-end justify-end">
                            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">{{ $chat->message }}</span></div>
                            </div>
                            <img src="{{$chatRoom->admin->serviceProvider->link_photo}}" alt="My profile" class="w-6 h-6 rounded-full order-2">
                            <p class="text-sm">{{$chat->created_at->format('H:i')}}</p>
                        </div>
                    </div>
                    @else
                    <div class="chat-message">
                        <div class="flex items-end">
                            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">{{ $chat->message }}</span></div>
                            </div>
                            <img src="/profile_picture/default.jpg" alt="My profile" class="w-6 h-6 rounded-full order-1">
                            <p class="order-3 text-sm">{{$chat->created_at->format('H:i')}}</p>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="fixed bottom-0 w-full border-t-2 border-gray-200 px-4 py-4 mb-2 sm:mb-0 ">
            <div class="relative flex">
                <span class="absolute inset-y-0 flex items-center">
                    <button type="button" class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                    </svg>
                    </button>
                </span>
                <input type="text" placeholder="Write your message!" class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3" id="message">
                <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                    <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                    </svg>
                    </button>
                    <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    </button>
                    <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    </button>
                    <button type="send" class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none" id="send">
                    <span class="font-bold">Send</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 ml-2 transform rotate-90">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
            cluster: 'ap1'
        });
        const channel = pusher.subscribe('public');

        //Receive messages
        channel.bind('chat', function(data) {
            console.log(1)
            console.log(data)
            $('#messages').append(`
                <div class="chat-message">
                    <div class="flex items-end">
                        <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                            <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">${data.chat.message}</span></div>
                        </div>
                        <img src="/profile_picture/default.jpg" alt="My profile" class="w-6 h-6 rounded-full order-1">
                        <p class="order-3 text-sm">${getCurrentWIBTime()}</p>
                    </div>
                </div>
            `)
        });


        $('#send').click(() => {

            $.ajax({
                url: '/insertMessage',
                type: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: {
                    _token: '{{ csrf_token() }}',
                    message: document.getElementById('message').value,
                    chat_room_id: {{ $chatRoom->id }},
                    senderuser: 1,
                },
                success: function(response, status, xhr) {
                    $('#messages').append(`
                    <div class="chat-message mr-3 mb-3">
                        <div class="flex items-end justify-end">
                            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">${document.getElementById('message').value}</span></div>
                            </div>
                            <img src="{{$chatRoom->admin->serviceProvider->link_photo}}" alt="My profile" class="w-6 h-6 rounded-full order-2">
                            <p class="text-sm">${getCurrentWIBTime()}</p>
                        </div>
                    </div>
                    `)
                    document.getElementById('message').value = ""
                },
                error: function(xhr) {
                    console.log(xhr.responseJSON.message)
                }
            })
        })

    function getCurrentWIBTime() {
        const now = new Date();
        // Calculate UTC time
        const utcTime = now.getTime() + now.getTimezoneOffset() * 60000;
        // Add 7 hours for WIB (UTC+7)
        const wibTime = new Date(utcTime + 7 * 3600000);
        
        // Format the time in 'YYYY-MM-DD HH:mm:ss' format
        const year = wibTime.getFullYear();
        const month = String(wibTime.getMonth() + 1).padStart(2, '0');
        const day = String(wibTime.getDate()).padStart(2, '0');
        const hours = String(wibTime.getHours()).padStart(2, '0');
        const minutes = String(wibTime.getMinutes()).padStart(2, '0');
        const seconds = String(wibTime.getSeconds()).padStart(2, '0');
        
        return `${hours}:${minutes}`;
    }

    </script>
</body>

</html>
