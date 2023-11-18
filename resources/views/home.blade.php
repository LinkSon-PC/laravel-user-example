@extends('layouts.plantilla')
@section('title','Resultado')

@section('content')

    <h1>Bienvenido Home @auth
        {{Auth::user()->name}}
    @endauth</h1>
@endsection