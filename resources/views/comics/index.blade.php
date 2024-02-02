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
                <li class="mb-2">
                    - {{ $comic->title }}
                    - <a href="{{ route('comics.show', $comic->id) }}">Dettagli fumetto</a>
                    - <a href="{{ route('comics.edit', $comic->id) }}">Modifica fumetto</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="cancella">
                        @csrf
                        @method('DELETE')
                        <input type="button" value="Cancella" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal{{ $loop->iteration }}">
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $loop->iteration }}" tabindex="-1"
                            aria-labelledby="modalLabel{{ $loop->iteration }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel{{ $loop->iteration }}">Sei sicuro
                                            di voler cancellare
                                            il fumetto '{{ $comic->title }}'?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <input type="submit" value="Si" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
