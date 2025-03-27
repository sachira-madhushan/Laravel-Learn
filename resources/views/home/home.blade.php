<x-layout>
    <h1>Home</h1>
    <p>{{$greeting}}</p>

    @foreach ($heros as $hero)
            <p>{{$hero['name']." ".$hero['skill']}}</p>
    @endforeach

    @if ($greeting=="hello")
        <p>If condition is true</p>
    @endif
    <a href="/welcome">Click here</a>

</x-layout>
