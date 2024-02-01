@extends('layouts.app')

@section('header')
    <header>
        <h1 class="text-center">{{ $comic->title }}</h1>
    </header>
@endsection

@section('main')
    <main>
        <div class="container text-center">
            <img src="{{ $comic->thumb }}" alt="">
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
    </main>
@endsection
