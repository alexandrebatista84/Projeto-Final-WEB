<?php
	include 'header.php';
?>

<div class="container">
    <h1>ABOUT</h1>
    
    <form action="about.php" method="POST">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      
      <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea class="form-control" id="message" name="message"></textarea>
      </div>
      
      <button type="submit" class="btn botao btn-primary">Enviar</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];
      
      echo "<h2>Dados Enviados:</h2>";
      echo "<p><strong>Nome:</strong> " . $name . "</p>";
      echo "<p><strong>Email:</strong> " . $email . "</p>";
      echo "<p><strong>Mensagem:</strong> " . $message . "</p>";
    }
    ?>
  </div>

 


<?php
	include 'footer.php';
?>