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
        <ul>
            @foreach ($movies as $movie)
            
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$movie->originaltitle}}</h6>
                  <p class="card-text">{{$movie->nationality}}</p>
                  <a href="#" class="card-link">{{$movie->date}}</a>
                  <a href="#" class="card-link">{{$movie->vote}}</a>
                </div>
              </div>
        @endforeach
        </ul>
        
    </div>
</body>
</html>