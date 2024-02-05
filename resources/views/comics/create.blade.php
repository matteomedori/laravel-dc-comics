@extends('layouts.app')

@section('header')
    <header>
        <h1 class="text-center">Aggiungi un nuovo fumetto</h1>
    </header>
@endsection

@section('main')
    <main>
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
                        name="description">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="thumb" class="form-label">Link img fumetto</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                        name="thumb" value="{{ old('thumb') }}">
                </div>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" value="{{ old('price') }}">
                </div>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                        name="series" value="{{ old('series') }}">
                </div>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data d'uscita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                        name="sale_date" value="{{ old('sale_date') }}">
                </div>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                        name="type" value="{{ old('type') }}">
                </div>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="artists" class="form-label">Artista</label>
                    <input type="text" class="form-control @error('artists') is-invalid @enderror " id="artists"
                        name="artists" value="{{ old('artists') }}">
                </div>
                @error('artists')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittore</label>
                    <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                        name="writers" value="{{ old('writers') }}">
                </div>
                @error('writers')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" value="Aggiungi" class="btn btn-primary">
            </form>
        </div>
    </main>
@endsection
