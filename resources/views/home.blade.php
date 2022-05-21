<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Model-Controller</title>
</head>



<body>
    @include('partials/header')
    <main>
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie->title }}</h2>
                <h3>{{ $movie->original_title }}</h3>
                <div>
                    <span>Nazionalità - {{ $movie->nationality }}</span>
                    <span>Data uscita - {{ $movie->date }}</span>
                    <span>Voto - {{ $movie->vote }}</span>
                </div>
            </div>
        @endforeach
    </main>
    @include('partials/footer')
</body>

</html>
