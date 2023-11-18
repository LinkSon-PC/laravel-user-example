@extends('layouts.plantilla')
@section('title','Login')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('login.store') }}">
            @csrf

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            @error('email')
                <br>
                <span>*{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            @error('password')
                <br>
                <span>*{{$message}}</span>
            @enderror

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Recordar
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
@endsection