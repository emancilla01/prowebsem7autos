<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Autos</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                Sistema de Autos
            </div>
        </div>
        <div class="row">
            <div class="col">
                @yield('menu')
            </div>
        </div>
        <div class="row">
            <div class="col">
                @yield('contenido1')
            </div>
        </div>
        <div class="row">
            <div class="col">
                pie de pagina
            </div>
        </div>
    </div>
</body>
</html>