<header>
    <h1>WEB Laravel</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active' : ''}}">Home</a></li> 
            <li><a href="{{route('estudiante.index')}}" class="{{request()->routeIs('estudiante.*')? 'active' : ''}}">Estudiantes</a></li>
            <li><a href="{{route('resultado.index')}}" class="{{request()->routeIs('resultado.*')? 'active' : ''}}">Nosotros</a></li>
            
            @if(Auth::check())
                <li><a href="{{ route('logout') }}">Cerrar Sesión</a></li>
            @else
            
                <li><a href="{{route('login')}}" class="{{request()->routeIs('login.*')? 'active' : ''}}">Login</a></li>
                <li><a href="{{route('register')}}" class="{{request()->routeIs('register.*')? 'active' : ''}}">Registro</a></li>
            @endif
            
        </ul>
    </nav>
</header>