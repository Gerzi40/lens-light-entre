
    <div>
        @foreach ($chatRooms as $CR)
        <a href="/adminChatDetail/{{$CR->id}}">
            {{$CR->user->username}}
            <br>
        </a>
        @endforeach
    </div>