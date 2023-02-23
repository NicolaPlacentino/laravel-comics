<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header')
    <main>
        <div class="jumbo">
            <img src="{{asset('images/jumbotron.jpg')}}" alt="jumbotron">
        </div>
        <div class="container">
            <h2>Current series</h2>
            <div class="card-section">
                @foreach ($comics as $comic)
                <div class="card">
                    <figure>
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <figcaption>{{$comic['series']}}</figcaption>
                    </figure>
                </div>
                @endforeach

            </div>
            <div class="text-center">
                <button>Load More</button>
            </div>
        </div>
    </main>
    @include('includes.footer')

</body>
</html>