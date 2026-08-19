@extends('layouts.base')

@section('title', 'Librería El Lápiz')
@section('h1', 'Librería El Lápiz')

@section('content')

    <p>
        Librería El Lápiz es un espacio de barrio donde encontrás libros para todos los gustos,
        a precios accesibles y con atención cercana.
    </p>

    <p>Hay {{ count($libros) }} libros en el catálogo.</p>

    <ul>
        @foreach ($libros as $libro)
            <li>{{ $libro->titulo }} — Bs {{ $libro->precio }}</li>
        @endforeach
    </ul>

    <p>Catálogo atendido por Angel Osriel Herrera Tola</p>

    <a href="/libros/nuevo">Registrar nuevo libro</a>

@endsection