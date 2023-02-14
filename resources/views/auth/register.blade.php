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
	<h1>Crear una cuenta nueva</h1>
</div>

	<div class="contenido">
	
	    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Nombre</label><br>
            <input id="name" type="text" name="name" required autofocus autocomplete="name" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email">E-Mail</label><br>
            <input id="email" type="email" name="email" required autofocus autocomplete="username" />
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label><br>
            <input id="password" type="password" name="password" required autocomplete="new-password" />
        </div>

        <!-- Password confirmation -->
        <div>
            <label for="password_confirmation">Confirmar password</label><br>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div>
        		<br>
            <input type="submit" value="Registrarse">
        </div>
    </form>


   <p>Si ya se creó una cuenta anteriormente, <a href="{{ route('login') }}">inicie sesión.</a></p>
   </div>
</body>
</html>
