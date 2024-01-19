@extends('layout')
@section('title', 'stored')

@section('content')
    <span>Pelicula guardada: {{ $movie->title}}</span>

@endsection
