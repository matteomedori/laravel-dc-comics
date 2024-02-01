<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-list</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container text-center">
        <h1>Dettagli fumetto</h1>
        <img src="{{ $comic->thumb }}" alt="">
        <h4>{{ $comic->title }}</h4>
        <p>{{ $comic->description }}</p>
        <p>Prezzo: {{ $comic->price }}$</p>
        <p>Data d'uscita: {{ $comic->sale_date }}</p>
        <p>Serie: {{ $comic->series }}</p>
        <p>Tipo: {{ $comic->type }}</p>
        <ul>Artisti:
            @foreach ($comic->artists as $artist)
                <li>-{{ $artist }}</li>
            @endforeach
        </ul>
        <ul>Scrittori:
            @foreach ($comic->writers as $writer)
                <li>-{{ $writer }}</li>
            @endforeach
        </ul>
        <a href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
    </div>


    <a href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
</body>

</html>
