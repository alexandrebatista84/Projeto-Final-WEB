<?php
	include 'header.php';
?>

<div class="container">

    <div class="row">
      <div class="col">
      <h1>JOGO DO GALO</h1>
  
  <div class="board">
    <div class="cell" onclick="handleMove(0, 0)"></div>
    <div class="cell" onclick="handleMove(0, 1)"></div>
    <div class="cell" onclick="handleMove(0, 2)"></div>
    <div class="cell" onclick="handleMove(1, 0)"></div>
    <div class="cell" onclick="handleMove(1, 1)"></div>
    <div class="cell" onclick="handleMove(1, 2)"></div>
    <div class="cell" onclick="handleMove(2, 0)"></div>
    <div class="cell" onclick="handleMove(2, 1)"></div>
    <div class="cell" onclick="handleMove(2, 2)"></div>
  </div>

  <script>
    // Representação do tabuleiro
    let board = [
      ['', '', ''],
      ['', '', ''],
      ['', '', '']
    ];
    
    // Jogador atual
    let currentPlayer = 'X';
    
    // Função para lidar com o movimento do jogador
    function handleMove(row, col) {
      if (board[row][col] === '') {
        board[row][col] = currentPlayer;
        document.getElementsByClassName('cell')[row * 3 + col].innerText = currentPlayer;
        
        if (checkWin()) {
          alert('Jogador ' + currentPlayer + ' venceu!');
          resetBoard();
        } else if (checkDraw()) {
          alert('Empate!');
          resetBoard();
        } else {
          currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        }
      }
    }
    
    // Função para verificar se há um vencedor
    function checkWin() {
      for (let i = 0; i < 3; i++) {
        if (
          (board[i][0] !== '' && board[i][0] === board[i][1] && board[i][0] === board[i][2]) ||
          (board[0][i] !== '' && board[0][i] === board[1][i] && board[0][i] === board[2][i])
        ) {
          return true;
        }
      }
      
      if (
        (board[0][0] !== '' && board[0][0] === board[1][1] && board[0][0] === board[2][2]) ||
        (board[0][2] !== '' && board[0][2] === board[1][1] && board[0][2] === board[2][0])
      ) {
        return true;
      }
      
      return false;
    }
    
    // Função para verificar se o jogo terminou em empate
    function checkDraw() {
      for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
          if (board[i][j] === '') {
            return false;
          }
        }
      }
      return true;
    }
    
    // Função para reiniciar o tabuleiro
    function resetBoard() {
      board = [
        ['', '', ''],
        ['', '', ''],
        ['', '', '']
      ];
      
      let cells = document.getElementsByClassName('cell');
      for (let i = 0; i < cells.length; i++) {
        cells[i].innerText = '';
      }
      
      currentPlayer = 'X';
    }
  </script>



      </div>

    </div>

</div>
  

<?php
	include 'footer.php';
?>
