<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERSOR DE DIVISAS</title>
    <link rel="stylesheet" href="public/Css/style2.css"> <!-- Vinculacion del css -->
</head>
<body>

    <div class="container">
        <h1>CONVERSOR DE MONEDA</h1>

        <!-- Formulario para conversion -->
        <form id="conversor-form">
            <div class="input-group">
                <label for="cantidad">CANTIDAD:</label>
                <input type="number" id="cantidad" min="0" placeholder="Ingrese cantidad" required>
            </div>

            <div class="select-group">
                <label for="moneda-origen">MONEDA DE ORIGEN:</label>
                <select id="moneda-origen" required>
                    <option value="">SELECCIONE</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                </select>
            </div>

            <div class="select-group">
                <label for="moneda-destino">MONEDA DE DESTINO:</label>
                <select id="moneda-destino" required>
                    <option value="">SELECCIONE</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                </select>
            </div>

            <div class="result-group">
                <p>RESULTADO: <span id="resultado">0</span></p>
            </div>

            <button type="submit">CONVERTIR</button>
        </form>
    </div>

    <script src="public/Js/script2.js"></script> <!-- Vinculacion del js -->
</body>
</html>
