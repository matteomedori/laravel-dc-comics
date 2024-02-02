@extends('layouts.app')

@section('header')
    <header>
        <h1 class="text-center">Modifica fumetto</h1>
    </header>
@endsection

@section('main')
    <main>
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="5" name="description">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Link img fumetto</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data d'uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artista</label>
                    <input type="text" class="form-control" id="artists" name="artists"
                        value="{{ implode(', ', $comic->artists) }}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittore</label>
                    <input type="text" class="form-control" id="writers" name="writers"
                        value="{{ implode(', ', $comic->writers) }}">
                </div>
                <input type="submit" value="Modifica" class="btn btn-primary">
            </form>
        </div>
    </main>
@endsection
