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
                        <h2>Title:
                            <span>{{$movie->title}}</span>
                        </h2>
                        <h3>Original title:
                            <span>{{$movie->original_title}}</span>
                        </h3>
                        <h3>Nationality:
                            <span>{{$movie->nationality}}</span>
                        </h3>
                        <h3>Date:
                            <span>{{$movie->date}}</span>
                        </h3>
                        <h3>Vote:
                            <span>{{$movie->vote}}</span>
                        </h3>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>