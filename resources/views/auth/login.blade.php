<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <style>
    </style>
</head>
<body>
<div class="cabecera">
	<h1>Iniciar sesión</h1>
</div>

	<div class="contenido">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">E-Mail</label><br>
            <input id="email" type="email" name="email" required autofocus autocomplete="username" />
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label><br>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div>
            <label for="remember_me"><br>
                <input id="remember_me" type="checkbox" name="remember">
                <span>Recuérdame</span>
            </label>
        </div>

        <div>
            <br>
            <input type="submit" value="Entrar">
        </div>
    </form>
    
    <p>Si todavía no tiene una cuenta creada, <a href="{{ route('register') }}">regístrese ahora mismo.</a></p>
    </div>
</body>
</html>
