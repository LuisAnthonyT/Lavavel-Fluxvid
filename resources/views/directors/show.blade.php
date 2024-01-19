@extends('layout')

@section('titleMovie', 'Director')

@section('content')
    <h2>Nombre: {{$director->name}}</h2>
    <span>Fecha de nacimiento: {{ $director->birthday}}</span>
    <span>Nationalidad: {{ $director->nationality}}</span>
    <br>
    <h2>Peliculas:</h2>

    @foreach ($director->movies as $movie)
        <span><a href="{{route('movies.show', $movie)}}">Titulo: {{ $movie->title }}</a></span><br>
        <span>Año: {{ $movie->year }}</span><br>
    @endforeach

@endsection

