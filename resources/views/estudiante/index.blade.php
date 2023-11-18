@extends('layouts.plantilla')
@section('title','Estudiante')

@section('content')
    <h1>Bienvenido a la pagina de Estudiante</h1>
    <a href="{{route('estudiante.create')}}">Crear Estudiante</a>

    @foreach ($estudiantes as $estudiante)
        <li><a href="{{route('estudiante.show',$estudiante)}}">{{$estudiante->cui_pasaporte . " " . $estudiante->nombres_completos}}</a></li>
    @endforeach

    {{$estudiantes->links()}}
@endsection