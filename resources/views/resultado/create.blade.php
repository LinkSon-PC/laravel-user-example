@extends('layouts.plantilla')
@section('title','Crear Resultado')

@section('content')

    <h1>Bienvenido a la pagina de Crear Resultado</h1>
    <form action="{{route('resultado.store')}}" method="post">
        @csrf
        <label>
            Nombre
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <button type="submit">Enviar</button>
    </form>
@endsection