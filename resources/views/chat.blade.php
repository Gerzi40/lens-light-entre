    <div>
        @foreach ($chatRooms as $CR)
        <a href="/chatDetail/{{$CR->id}}">
            {{ $CR->admin->username }}
            <br>
        </a>
        @endforeach
    </div>
