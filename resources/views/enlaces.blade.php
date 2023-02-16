@extends('layout')

@section('navegación')
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/enlaces">Enlaces</a></li>
        @if (Route::has('login'))
          @auth
          <li><a href="/enlaces/create">Crear enlace</a></li>
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

@section("contenido")
  @auth
    <form method="get" action="/enlaces/create">
        <label for="crearenlace">Acciones:</label><br>
        <input id="crearenlace" type="submit" value="Crear nuevo enlace">
      </form>
    

    <h2>Enlaces guardados</h2>

    @if( !empty($enlaces) )
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>URL</th>
            <th>Categoría</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($enlaces as $e)
          <tr>
            <td>{{$e->nombre}}</td>
            <td class="center"><a href="http://{{$e->url}}">{{$e->url}}</a></td>
            <td>{{$e->categoria}}</td>
            <td class="center acciones">
                <form method="delete" action="/enlaces/{{$e->id}}">@csrf
                    <input type="submit" class="eliminar" value="Eliminar">
                <form>
                <a href="/enlaces/{{$e->id}}/edit">Editar</a>
                <a href="/enlaces/{{$e->id}}">Mostrar</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    @else
      <p>No hay ningún enlace almacenado.</p>
    @endif
  @endauth

  @guest
    <h2>Contenido protegido</h2>
    <p>No se puede acceder al contenido de esta página sin iniciar sesión. 
    <a href="{{ route('login') }}">Inicie sesión</a> para poder acceder.</p>
  @endguest
@endsection
