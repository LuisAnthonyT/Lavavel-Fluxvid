@extends('layout')

@section('titleList', 'List')

@section('list')
    <h1>Listado de películas</h1>
    @forelse ($movies as $movie)
       <a href="{{route('movies.show', $movie)}}">Título: {{$movie->title}}</a>
       <br>
       <a href="{{route('directors.show', $movie)}}">Director: {{ $movie->director->name}}</a>
       @auth
            @if ($movie->visibility == false)
                <span>Disponible</span>
            @else
                <span>No disponible</span>
            @endif
       @endauth
       <hr>
    @empty

    @endforelse
    {{ $movies->links() }}
@endsection


