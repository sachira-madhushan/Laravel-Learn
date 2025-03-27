<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>{{$greeting}}</p>

    @foreach ($heros as $hero)
            <p>{{$hero['name']." ".$hero['skill']}}</p>
    @endforeach

    @if ($greeting=="hello")
        <p>If condition is true</p>
    @endif
    <a href="/welcome">Click here</a>
</body>
</html>
