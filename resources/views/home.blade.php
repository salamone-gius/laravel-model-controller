<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Movies</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h1>Movies DB</h1>
        <div class="container">
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        <a href="{{route('movie-details', $movie->id)}}">
                            {{-- due sintassi diverse per prendere la proprietà dall'array --}}
                            <h2>{{$movie->id}} - {{$movie['title']}}</h2>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>