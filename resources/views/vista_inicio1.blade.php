<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Autos</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>Sistema de Autos</h1>
    <hr>
    <a href="marcas">Marcas</a>
    <a href="clientes">Clientes</a>
    <a href="autos">Autos</a>
    <input
        name=""
        id=""
        class="btn btn-primary"
        type="button"
        value="Button"
    />
    

    @yield('contenido1')
    
</body>
</html>