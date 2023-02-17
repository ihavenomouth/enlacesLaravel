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
	<h2>Mostrar enlace</h2>

  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>URL</th>
        <th>Categoría</th>
        <th>Creación</th>
        <th>Actualizado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$enlace->nombre}}</td>
        <td class="center"><a href="http://{{$enlace->url}}">{{$enlace->url}}</a></td>
        <td>{{$enlace->categoria}}</td>
        <td class="center">{{$enlace->created_at}}</td>
        <td class="center">{{$enlace->updated_at}}</td>
      </tr>
    </tbody>
  </table>

  <p>Volver a la <a href="/enlaces">lista de enlaces</a></p>

    @endauth

    @guest
    <h2>Contenido protegido</h2>
    <p>No se puede acceder al contenido de esta página sin iniciar sesión. 
    <a href="{{ route('login') }}">Inicie sesión</a> para poder acceder.</p>
    @endguest
@endsection
