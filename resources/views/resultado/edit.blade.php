@extends('layouts.plantilla')
@section('title','Crear Resultado')

@section('content')

    <h1>Bienvenido a la pagina de Editar Resultado</h1>
    <form action="{{route('resultado.update', $resultado)}}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre
            <input type="text" name="nombre" value="{{old('nombre', $resultado->nombre)}}">
        </label>
        @error('nombre')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <button type="submit">Actualizar</button>
    </form>
@endsection