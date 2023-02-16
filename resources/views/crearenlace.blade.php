@extends('layout')

@section('navegación')
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/enlaces">Enlaces</a></li>

        @auth
        <li><a href="/enlaces/create">Nuevo enlace</a></li>
        @endauth
        
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
@endsection


@section('contenido')

	@auth
	<h2>Crear nuevo enlace</h2>

  @if(! empty($error) )
		<p>Se produjo un error al intentar guardar el enlace anterior.</p>
		<p>Error: {{$error}}</p>
	@endif

  

	<form method="post" action="/enlaces/create">
	  @csrf
	  <label for="nombre">Nombre:</label><br>
	  <input type="text" name="nombre"><br>
	  <label for="url">URL:</label><br>
	  <input type="text" name="url"><br>
	  <label for="categoria">Categoria:</label><br>
	  <input type="text" name="categoria"><br>
	  <br>	  
	  <input id="crearenlace" type="submit" value="Crear enlace">
	</form>

    @endauth

    @guest
    <h2>Contenido protegido</h2>
    <p>No se puede acceder al contenido de esta página sin iniciar sesión. 
    <a href="{{ route('login') }}">Inicie sesión</a> para poder acceder.</p>
    @endguest
@endsection
