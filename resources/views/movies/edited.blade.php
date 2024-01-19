@extends('layout')
@section('title', 'movie')

@section('content')
    <span>Pelicula modificada: {{ $movie->title}}</span>

@endsection
