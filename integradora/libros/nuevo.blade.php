@extends('layouts.base')

@section('title', 'Librería El Lápiz')
@section('h1', 'Librería El Lápiz')

@section('content')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/libros/nuevo" method="POST">
        @csrf

        <label for="titulo">Título del libro</label>
        <input type="text" id="titulo" name="titulo">

        <label for="precio">Precio en Bs</label>
        <input type="number" id="precio" name="precio">

        <button type="submit">Registrar libro</button>
    </form>

@endsection