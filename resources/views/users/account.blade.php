@extends('layout')
@section('content')
    @auth
        <span>Nombre: {{ Auth::user()->name}}</span><br>
        <span>Nombre de usuario: {{ Auth::user()->username}}</span><br>
        <span>Email: {{ Auth::user()->email}}</span><br>
        <span>Fecha de nacimiento: {{ Auth::user()->birthday}}</span><br>
    @endauth
@endsection
