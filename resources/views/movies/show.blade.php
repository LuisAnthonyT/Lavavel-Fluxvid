@extends('layout')

@section('titleMovie', 'Movie')

@section('movie')
    <h1>Nombre: {{$movie->title}}</h1>
    <a href="{{route('movies.edit', $movie)}}">Editar</a><br>
    <form action="{{route('movies.destroy', ['movie'=>$movie->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
@endsection



