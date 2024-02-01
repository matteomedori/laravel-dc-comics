@extends('layouts.app')

@section('header')
    <header>
        <h1>Laravel Comics</h1>
        <a href="{{ route('comics.index') }}">Vai alla lista fumetti</a>
    </header>
@endsection
