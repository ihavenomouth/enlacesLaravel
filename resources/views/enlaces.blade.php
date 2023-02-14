<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
    </style>
</head>
<body>
<div class="cabecera">
    <h1>Enlaces</h1>
</div>

<nav>
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/enlaces">Enlaces</a></li>
        @if (Route::has('login'))
          @auth
          <li><form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="{{route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
          Logout
          </a></form></li>
          @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Registrarse</a></li>
          @endauth
        @endif
    </ul>
</nav>

<div class="contenido">
	@auth
    <h2>Enlaces guardados</h2>
    <ul>
    <li>Blablabla</li>
    <li>Blebleble</li>
    </ul>
    @endauth

    @guest
    <h2>Contenido protegido</h2>
    <p>No se puede acceder al contenido de esta página sin iniciar sesión. 
    <a href="{{ route('login') }}">Inicie sesión</a> para poder acceder.</p>
    @endguest
</div>
</body>
</html>
