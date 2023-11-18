@extends('layouts.plantilla')
@section('title','Ver Estudiante')

@section('content')
    <h1>Bienvenido a la pagina Ver Estudiante</h1>
    
    <h2>{{$estudiante->nombres_completos}}</h2>

    <a href="{{route('estudiante.edit', $estudiante)}}">Editar</a>

    <p><strong>CUI o Passporte</strong> {{$estudiante->cui_pasaporte}}</p>
    <p><strong>Nombres Completos</strong> {{$estudiante->nombres_completos}}</p>
    <p><strong>Apellidos Completos</strong> {{$estudiante->apellidos_completos}}</p>
    <p><strong>NOV</strong> {{$estudiante->nov}}</p>
    <p><strong>Correo</strong> {{$estudiante->correo}}</p>
    <p><strong>Fecha de Nacimiento</strong> {{$estudiante->fecha_nacimiento}}</p>
    <p><strong>Sexo</strong> {{$estudiante->sexo}}</p>
    <p><strong>Pueblo</strong> {{$estudiante->pueblo}}</p>
    <p><strong>Estado Civil</strong> {{$estudiante->estado_civil}}</p>
    <p><strong>Direccion</strong> {{$estudiante->direccion}}</p>
    <p><strong>Establecimiento donde se graduo</strong> {{$estudiante->establecimiento}}</p>
    <p><strong>Mano con que escribe</strong> {{$estudiante->mano_escribe}}</p>
    <p><strong>Discapacidad</strong> {{$estudiante->discapacidad}}</p>
    <p><strong>Celular</strong> {{$estudiante->celular}}</p>
    <p><strong>Telefono de Casa</strong> {{$estudiante->telefono_casa}}</p>
    <p><strong>URL DPI</strong> {{$estudiante->drive_dpi}}</p>

    <form action="{{route('estudiante.destroy', $estudiante)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection