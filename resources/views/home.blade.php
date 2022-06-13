<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        {{-- @dump($movies) --}}
        <div class="row ">
            @foreach ($movies as $movie)
            <div class="col g-2">
                <div class="card h-100 " style="width: 14rem; ">
                    <div class="card-body">
                      <h5 class="card-title text-center">{{$movie->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted text-center">{{$movie->original_title}}</h6>
                      <p  class="card-text"> Nationality: {{$movie->nationality}}</p>
                      <p  class="card-text"> Relase date: {{$movie->date}}</p>
                      <p  class="card-text">Vote: {{$movie->vote}}</p>
                    </div>
                  </div>
                
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>