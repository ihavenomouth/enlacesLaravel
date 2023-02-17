<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>

    <link rel="preload" href="/img/fondocabecera.jpg" as="image" type="image/jpg" />
    
    <link rel="stylesheet" href="/css/estilos.css">
    <style>
    </style>
</head>
<body>
<div class="cabecera">
    <h1>Enlaces</h1>
</div>

<nav>
	@yield('navegación')
</nav>

<div class="contenido">

	@yield('contenido')

</div>
</body>
</html>
