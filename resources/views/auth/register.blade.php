@extends('layouts.plantilla')
@section('title','Registro')

@section('content')
<div class="container">
    <form method="post" action="{{ route('register.register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{old('name')}}">
        </div>
        @error('name')
            <br>
            <span>*{{$message}}</span>
        @enderror

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{old('email')}}">
        </div>
        @error('email')
            <br>
            <span>*{{$message}}</span>
        @enderror

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required value="{{old('password')}}">
        </div>
        @error('password')
            <br>
            <span>*{{$message}}</span>
        @enderror

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required value="{{old('password_confirmation')}}">
        </div>
        @error('password_confirmation')
            <br>
            <span>*{{$message}}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection