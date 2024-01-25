@extends('layout')
@section('content')
    <form action="{{ route('login')}}" method="post">
        @csrf

        <label for="username">Nombre de usuario:</label><br>
        <input type="text" name="username" id="username"><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" id="password">

        <input type="submit" value="Enviar">
    </form>

@endsection
