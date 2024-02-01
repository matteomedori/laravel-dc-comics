<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-list</title>
</head>

<body>
    <h1>Singolo fumetto</h1>
    <p>{{ $comic->title }}</p>
    <a href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
</body>

</html>
