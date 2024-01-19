@extends('layout')
@section('content')
   <form action="{{ route('movies.store')}}" method="post">
    @csrf

    <label for="title">Título</label>
    <input type="text" name="title" id="title">
    <br>

    <label for="year">Año</label>
    <select name="year" id="year">
        <option value="selecciona">Selecciona un año</option>
        @for ($i=1950; $i<date('Y')+2; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    <br>

    <label for="plto">Argumento</label>
    <textarea name="plot" id="plot" cols="30" rows="10"></textarea>
    <br>

    <label for="rating">Puntuación (de  0 a 5 con un decimal):</label>
    <input type="text" name="rating" id="rating">

    <label for="visibility">Visible:</label>
    <input type="text" name="visibility" id="visibility">

    <select name="director" id="director">
        @foreach ($directors as $director )
            <option value="{{ $director->id}}">{{ $director->name}}</option>
        @endforeach
    </select>
    <br>

    <input type="submit" value="enviar">
</form>

@if ($errors->any())
    Hay errores en el formulario: <br>
    @foreach ($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
@endif
@endsection
