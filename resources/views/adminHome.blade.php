<x-layout>
    <div class="pt-24">
        a
        {{$service->name}}
        <br>
        {{$service->short_description}}
        <br>
        {{$service->category->name}}
        <br>
        {{$service->admin->username}}
        <br>
        {{$service->rating}}
        <br>
        {{$service->email}}
    </div>
</x-layout>