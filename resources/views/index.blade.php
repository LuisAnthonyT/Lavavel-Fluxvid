@extends('layout')

@section('title', 'Inicio')

@section('content')
    <form action="{{ route('directors.nationality') }}" method="post">
        @csrf

        <select name="country" id="country">
            @foreach ($countrys as $country )
                <option value="{{ $country }}">{{ $country }} </option>
            @endforeach
        </select>
        <input type="submit" value="Mostrar directores">
    </form>

    <h1>Bienvenido a FluxVid</h1>
    <p>¡Bienvenido a FluxVid, la revolucionaria aplicación de streaming de películas,
    donde la excelencia se encuentra con la innovación!

    Estamos encantados de que te unas a nosotros en esta emocionante travesía cinematográfica.

    Prepárate para sumergirte en un vasto y diverso catálogo que supera todas las expectativas,
    ofreciéndote una selección incomparable de películas que van desde clásicos atemporales hasta
    los últimos éxitos de taquilla. Nuestra plataforma se distingue por su velocidad incomparable,
    garantizando que puedas disfrutar de tus películas favoritas sin interrupciones ni demoras.
    Además, la calidad excepcional de transmisión te sumergirá en una experiencia visual y auditiva extraordinaria.

    Estamos comprometidos con llevarte más allá de los límites de la transmisión convencional, ofreciéndote
    una nueva dimensión de entretenimiento.

    ¡Bienvenido al futuro del streaming de películas!
    <p>
@endsection

