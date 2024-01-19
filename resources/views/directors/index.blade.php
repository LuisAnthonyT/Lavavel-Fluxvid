@extends('layout')
@section('title', 'Directores')
@section('content')
    <h2>Directores</h2>
    @forelse ($directors as $director)
        <span>Nombre: {{$director->name}}</span><br>
        <span>Nacionalidad: {{$director->nationality}}</span><br>
        <span>Fecha de nacimiento: {{$director->birthday}}</span><br>
        <hr>
    @empty

    @endforelse
@endsection
