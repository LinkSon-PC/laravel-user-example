@extends('layouts.plantilla')
@section('title','Editar Estudiante')

@section('content')
    <h1>Bienvenido a la pagina Editar Estudiante</h1>
    
    <h2>{{$estudiante->nombres_completos . " " . $estudiante->apellidos_completos}}</h2>

    <form action="{{route('estudiante.update', $estudiante)}}" method="post">
        @csrf
        @method('put')
        <label>
            CUI o Pasaporte
            <input type="number" name="cui_pasaporte" value="{{old('cui_pasaporte', $estudiante->cui_pasaporte)}}">
        </label>
        @error('cui_pasaporte')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <br>

        <label>
            Nombres Completos
            <input type="text" name="nombres_completos" value="{{old('nombres_completos', $estudiante->nombres_completos)}}">
        </label>
        @error('nombres_completos')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <br>
        
        <label>
            Nombres Completos
            <input type="text" name="apellidos_completos" value="{{old('apellidos_completos', $estudiante->apellidos_completos)}}">
        </label>
        @error('apellidos_completos')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <br>
        
        <label>
            Correo
            <input type="text" name="correo" value="{{old('correo', $estudiante->correo)}}">
        </label>
        @error('correo')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <br>
        
        <label>
            Fecha Nacimiento
            <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento', $estudiante->fecha_nacimiento)}}">
        </label>
        @error('fecha_nacimiento')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <br>
        
        <label>
            NOV
            <input type="number" name="nov" value="{{old('nov', $estudiante->nov)}}">
        </label>
        @error('nov')
            <br>
            <span>*{{$message}}</span>
        @enderror
        <br>

        <button type="submit">Enviar</button>
    </form>
@endsection