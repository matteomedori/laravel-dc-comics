<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-list</title>
</head>

<body>
    <h1>Lista dei fumetti</h1>
    <a href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto</a>
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic->title }}
                <a href="{{ route('comics.show', $comic->id) }}">Dettagli fumetto</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
