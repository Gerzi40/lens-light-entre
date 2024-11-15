<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <div id="chat">
        @foreach ($chatRoom->chats as $chat)
           <li>
                {{$chat->message}}
           </li>
        @endforeach
    </div>
    <input type="text" id="message">
    <button id="send">kirim</button>
    <script>
        
        const pusher  = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {cluster: 'ap1'});
        const channel = pusher.subscribe('public');
        
        //Receive messages
        channel.bind('chat', function (data) {
            console.log(1)
            console.log(data)
            $('#chat').append(`<li>${data.chat.message}</li>`)
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
                    $('#chat').append(`<li>${document.getElementById('message').value}</li>`)
                    document.getElementById('message').value = ""
                },
                error: function(xhr) {
                    console.log(xhr.responseJSON.message)
                }
            })
        })
    
    </script>
</body>
</html>