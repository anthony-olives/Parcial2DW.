<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRES EN RAYA</title>
    
    <!-- Bootstrap desde su CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/Css/style3.css">
</head>

<body>
    <div class="container text-center mt-5">
        <h1 class="display-4 mb-4">TRES EN RAYA</h1>
        
        <!-- Tablero de Juego -->
        <div class="board mb-4">
            <div class="row">
                <div class="col-4">
                    <input type="text" class="form-control" id="cell1" maxlength="1" onclick="playMove(1)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="cell2" maxlength="1" onclick="playMove(2)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="cell3" maxlength="1" onclick="playMove(3)">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <input type="text" class="form-control" id="cell4" maxlength="1" onclick="playMove(4)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="cell5" maxlength="1" onclick="playMove(5)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="cell6" maxlength="1" onclick="playMove(6)">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <input type="text" class="form-control" id="cell7" maxlength="1" onclick="playMove(7)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="cell8" maxlength="1" onclick="playMove(8)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="cell9" maxlength="1" onclick="playMove(9)">
                </div>
            </div>
        </div>
        
        <!-- Mensajes de resultado -->
        <div id="message" class="mb-4"></div>

        <!-- Botones -->
        <div class="d-grid gap-2">
            <button class="btn btn-primary" onclick="restartGame()">REINICIAR EL JUEGO</button>
            <button class="btn btn-secondary" onclick="redirectToForm1()">IR A FORMULARIO 1</button>
            <button class="btn btn-secondary" onclick="redirectToForm2()">IR A FORMULARIO 2</button>
        </div>
    </div>

    <!--Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0F5jS0y7cmCt1nt1zL2ISwbh8CRk1z2Usc6kZf4QGVhf2fFO" crossorigin="anonymous"></script>

    <!-- script del juego -->
    <script src="public/Js/script3.js"></script>
</body>

</html>




