@extends('layouts.app')

@section('header')
    <header>
        <h1>Lista dei fumetti</h1>
    </header>
@endsection

@section('main')
    <main>
        <a href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto</a>
        <ul>
            @foreach ($comics as $comic)
                <li>- {{ $comic->title }}
                    <a href="{{ route('comics.show', $comic->id) }}">Dettagli fumetto</a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
