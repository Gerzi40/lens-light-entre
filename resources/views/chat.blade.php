<x-layout>
        <div class="pt-36">
            <div>
                @foreach ($chatRooms as $CR)
                <a href="/chatDetail/{{$CR->id}}">
                    {{ $CR->admin->username }}
                    <br>
                </a>
                @endforeach
            </div>
        </div>
</x-layout>
