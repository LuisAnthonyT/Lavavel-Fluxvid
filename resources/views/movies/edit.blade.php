@extends('layout')

@section('title', 'Edit')
@section('content')
<form action="{{ route('movies.update')}}" method="post">
    @csrf
    @method('put')

    <label for="title">Título</label>
    <input type="text" name="title" id="title" value="{{ $movie->title}}">
    <br>

    <label for="year">Año</label>
    <select name="year" id="year">
        <option value="selecciona">Selecciona un año</option>
        @for ($i=1950; $i<date('Y')+2; $i++)
            <option value="{{ $i }}" {{ $i==$movie->year ? 'selected' : '' }}>
                {{ $i }}
            </option>
        @endfor
    </select>
    <br>

    <label for="plot">Argumento</label>
    <textarea name="plot" id="plot" cols="30" rows="10">{{ $movie->plot}}</textarea>
    <br>

    <label for="rating">Puntuación (de  0 a 5 con un decimal):</label>
    <input type="text" name="rating" id="rating" value="{{ $movie->rating}}">

    <label for="visibility">Visible:</label>
    <input type="checkbox" name="visibility" id="visibility" {{ $movie->visibility ==1 ? 'checked' : ''}}>

    <select name="director" id="director">
        @foreach ($directors as $director )
            <option value="{{ $director->id}}" {{ $director->id==$movie->director_id ? 'selected' : ''}}>
                {{ $director->name}}
            </option>
        @endforeach
    </select>
    <br>

    <input type="submit" value="enviar">
</form>

@endsection
