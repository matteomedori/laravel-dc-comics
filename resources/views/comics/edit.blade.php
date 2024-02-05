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
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title', $comic->title) }}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5"
                        name="description">{{ old('description', $comic->description) }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="thumb" class="form-label">Link img fumetto</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                        name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                </div>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" value="{{ old('price', $comic->price) }}">
                </div>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                        name="series" value="{{ old('series', $comic->series) }}">
                </div>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data d'uscita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                        name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                        name="type" value="{{ old('type', $comic->type) }}">
                </div>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="artists" class="form-label">Artista</label>
                    <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                        name="artists" value="{{ implode(', ', $comic->artists) }}">
                </div>
                @error('artists')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittore</label>
                    <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                        name="writers" value="{{ implode(', ', $comic->writers) }}">
                </div>
                @error('writers')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" value="Modifica" class="btn btn-primary">
            </form>
        </div>
    </main>
@endsection
