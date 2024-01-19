@extends('layout')
@section('title', 'nationality')
@section('content')
    <span>Pais: {{ $country}}</span><br>
    <span>Directores:</span><br>

    @forelse ($directors as $director)
        <span>Nombre: {{$director->name}}</span><br>
    @empty

    @endforelse
@endsection
