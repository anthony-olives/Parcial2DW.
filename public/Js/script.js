let contador = 0;

function actualizarContador() {
    const contadorElemento = document.getElementById('contador');
    contadorElemento.textContent = contador;
}

function incrementar() {    //INCREMENTA MIENTRAS EL VALOR DEL CONTADOR SEA MENOR A 20
    if (contador < 20) {
        contador++;
        actualizarContador();
        if (contador === 20) {  //REDIRIGE AL FORMULARIO DOS AL LLEGAR A 20
            window.location.href = "http://localhost/Parcial2DW/Index2-CFormF1";  
}

function decrementar() {
    if (contador > 0) {
        contador--;
        actualizarContador();
    }
}

}}
