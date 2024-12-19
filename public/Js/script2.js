document.getElementById("conversor-form").addEventListener("submit", function(event) {
    event.preventDefault();     // Previene que se recargue la página al enviar el formulario

    // Obtiene los valores de los diferentes campos
    const cantidad = parseFloat(document.getElementById("cantidad").value);
    const monedaOrigen = document.getElementById("moneda-origen").value;
    const monedaDestino = document.getElementById("moneda-destino").value;

    // Valida si los campos son correctos
    if (cantidad <= 0 || !monedaOrigen || !monedaDestino) {
        alert("Ingresa una cantidad válida y selecciona una monedas.");
        return;
    }

    // Valida que no se haga la conversión entre la misma moneda
    if (monedaOrigen === monedaDestino) {
        alert("No puedes convertir entre la misma moneda.");
        return;
    }

    // Convierte el valor segun de la moneda seleccionada
    let resultado;

    if (monedaOrigen === "USD" && monedaDestino === "EUR") {
        resultado = cantidad * 0.96; 
    } else if (monedaOrigen === "EUR" && monedaDestino === "USD") {
        resultado = cantidad * 1.06; 
    }

    // Muestra el resultado
    document.getElementById("resultado").textContent = resultado.toFixed(2);

    // Si el resultado es mayor o igual a 500 redirige al formulario index3
    if (resultado >= 500) {
        window.location.href = "http://localhost/Parcial2DW/Index3-CResultF1";  // Asegúrate de que "index3.html" sea la página a la que deseas redirigir
    }
});
