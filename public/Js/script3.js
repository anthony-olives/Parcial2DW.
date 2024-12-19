let currentPlayer = 'X';  // El jugador  empieza con X siempre
let gameBoard = ['', '', '', '', '', '', '', '', ''];  // Tablero vacío al empezar
let gameOver = false;

function playMove(cell) {
    if (gameOver) return;  // Si el juego ha terminado no permitir más movimientos

    let cellIndex = cell - 1;
    if (gameBoard[cellIndex] === '' && currentPlayer === 'X') {
        document.getElementById(`cell${cell}`).value = currentPlayer;
        gameBoard[cellIndex] = currentPlayer;
        checkWinner();
        if (!gameOver) {
            currentPlayer = 'O';
            computerMove();
        }
    }
}
function computerMove() {
    if (gameOver) return;

    let availableCells = [];
    for (let i = 0; i < 9; i++) {
        if (gameBoard[i] === '') {
            availableCells.push(i);
        }
    }
    if (availableCells.length === 0) return;

    let randomCell = availableCells[Math.floor(Math.random() * availableCells.length)];
    gameBoard[randomCell] = 'O';
    document.getElementById(`cell${randomCell + 1}`).value = 'O';
    checkWinner();
    if (!gameOver) {
        currentPlayer = 'X';
    }
}
function checkWinner() {            //Crea una matriz
    const winningCombinations = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];
    for (let combo of winningCombinations) {
        const [a, b, c] = combo;
        if (gameBoard[a] && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]) {
            gameOver = true;
            document.getElementById('message').innerHTML = currentPlayer === 'X' ? '¡Ganaste!' : 'Perdiste. La PC ganó.';
            return;
        }
    }
    if (gameBoard.every(cell => cell !== '')) {
        gameOver = true;
        document.getElementById('message').innerHTML = 'Empate!';
    }
}
function restartGame() {
    gameBoard = ['', '', '', '', '', '', '', '', ''];
    gameOver = false;
    currentPlayer = 'X';
    for (let i = 1; i <= 9; i++) {
        document.getElementById(`cell${i}`).value = '';
    }
    document.getElementById('message').innerHTML = '';
}
function redirectToForm1() {
    window.location.href = 'http://localhost/Parcial2DW/Index1-CVistaF1'; //redirige al formulario index1
}
function redirectToForm2() {
    window.location.href = 'http://localhost/Parcial2DW/Index2-CFormF1';    //redirige al formulario index2
}
