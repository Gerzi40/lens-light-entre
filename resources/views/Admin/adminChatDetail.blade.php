<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="w-auto h-screen mx-16 bg-slate-300">
        <div id="chat">
            <header class="bg-white p-4 text-gray-700">
                <a href="/adminChat"><button>Back</button></a>
                <h1 class="text-2xl font-semibold">{{ $chatRoom->user->username }}</h1>
            </header>
            <div class="mt-5">
                @foreach ($chatRoom->chats as $chat)
                    @if ($chat->senderuser != 1)
                        <div class="text-red-700 flex justify-end mx-5">
                            <div class="flex justify-end mb-4 cursor-pointer">
                                <div>
                                    <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                                        <p class="text-slate-700">{{ $chat->message }}</p>
                                    </div>
                                    <p>{{$chat->created_at->format('H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-red-700 flex mx-5">
                            <div class="flex mb-4 cursor-pointer">
                                <div>
                                    <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                                        <p class="text-slate-700">{{ $chat->message }}</p>
                                    </div>
                                    <p>{{$chat->created_at->format('H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    </li>
                @endforeach
            </div>
        </div>
    </div>
    <div class="fixed bottom-0 left-0 right-0 mx-16 bg-slate-800">
        <input type="text" class="w-11/12" id="message">
        <button id="send" class="text-center text-white ml-1">send</button>
    </div>
    <script>
        
        const pusher  = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {cluster: 'ap1'});
        const channel = pusher.subscribe('public');
        
        //Receive messages
        channel.bind('chat', function (data) {
            console.log(1)
            console.log(data)
            $('#chat').append(`<div class="text-red-700 flex mx-5">
                            <div class="flex mb-4 cursor-pointer">
                                <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                                    <p class="text-slate-700">${data.chat.message}</p>
                                </div>
                                <p>${getCurrentWIBTime()}</p>
                            </div>
                        </div>`)
        });

    
        $('#send').click(() => {
    
            $.ajax({
                url: '/adminInsertMessage',
                type: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: {
                    _token: '{{ csrf_token() }}',
                    message: document.getElementById('message').value,
                    chat_room_id: {{$chatRoom->id}},
                    senderuser: 0,
                },
                success: function(response, status, xhr) {
                    $('#chat').append(`<div class="text-red-700 flex justify-end mx-5">
                            <div class="flex justify-end mb-4 cursor-pointer">
                                <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                                    <p class="text-slate-700">${document.getElementById('message').value}</p>
                                    </div>
                                <p>${getCurrentWIBTime()}</p>
                            </div>
                        </div>`)
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