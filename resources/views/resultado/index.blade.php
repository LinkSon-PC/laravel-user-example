@extends('layouts.plantilla')
@section('title','Resultado')

@section('content')

    <h1>Bienvenido a la pagina de Resultado</h1>
    @foreach ($resultados as $resultado)
        <li>{{$resultado->nombre}} <a href="{{route('resultado.edit',$resultado)}}">Editar</a></li>
    @endforeach
@endsection