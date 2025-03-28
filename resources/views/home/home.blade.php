<x-layout>
    {{-- <h1>Home</h1>
    <p>{{$greeting}}</p> --}}

    @foreach ($heros as $hero)
            <x-card href="hero/{{$hero['id']}}">
                <h3>{{$hero['name']}}</h3>
            </x-card>
    @endforeach

    {{-- @if ($greeting=="hello")
        <p>If condition is true</p>
    @endif
    <a href="/welcome">Click here</a> --}}
    {{$heros->links()}}
</x-layout>
