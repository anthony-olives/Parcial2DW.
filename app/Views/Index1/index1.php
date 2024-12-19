<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Clics</title>
    
    <!-- Enlace a Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/Css/style.css">
</head>

<body>
    <div class="container text-center mt-5">
        <h1 class="display-4">¡CONTADOR DE CLICS!</h1>
        
        <!-- Fila para los botones -->
        <div class="row justify-content-center align-items-center">
            <div class="col-auto">
                <button class="btn btn-danger btn-lg" onclick="decrementar()">-</button>
            </div>
            <div class="col-auto">
                <span id="contador" class="h3 mx-3">0</span>
            </div>
            <div class="col-auto">
                <button class="btn btn-success btn-lg" onclick="incrementar()">+</button>
            </div>
        </div>
    </div>

    <!-- Scripts del Bootstrap -->
    <script src="public/Js/script.js"></script>
</body>

</html>
