@extends('layout')

@section('navegación')
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/enlaces">Enlaces</a></li>
    </ul>
@endsection

@section("contenido")
    <p>Bievenido a la aplicación de Enlaces, un servicio para guardar los marcadores diseñado para
       mantener la máxima privacidad posible. Sin anuncios, ni rastreo.</p>
    <p>Características del servicio:</p>
    <ul>
    <li>Gratuito</li>
    <li>Sin anuncios</li>
    <li>Sin cookies de terceros ni de seguimiento</li>
    <li>Enlaces categorizados</li>
    <li>Software libre</li>
    </ul>

    @if ( Route::has('register') && Route::has('login') )
    <p><a href="{{ route('register') }}">Regístrate</a> si no lo has hecho ya o
    <a href="{{ route('login') }}">inicia sesión</a> si ya estás registrado.</p>
    @else
    <p>Lamentablemente ahora mismo no nos es posible aceptar usuarios.</p>
    @endif
@endsection
