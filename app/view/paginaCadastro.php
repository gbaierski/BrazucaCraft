<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

<body>

  <div>

    <?php
      
      if(isset($_GET['erro'])) {
        echo '<div class="alert alert-danger">As senhas devem ser iguais!</div>';
      }
     
      if(isset($_GET['repetido'])) {
        echo '<div class="alert alert-danger">Este Login já foi escolhido por outra pessoa!</div>';
      }
      
      if(isset($_GET['success'])) {
        echo '<div class="alert alert-success">Usuario cadastrado!</div>';
      }

    ?>
    <h2>Cadastro</h2>
    <hr>
    <form action="..\model\cadastrarUsuario.php" method="post">

      <div>
        <label for="login">Login</label>
        <input type="text" id="login" name="login" required autofocus>
        </div>

      <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>

      <div>
        <label for="senha_repetida">Repita a Senha:</label>
        <input type="password" id="senha_repetida" name="senha_repetida" required>
      </div>
      <button type="submit" name="cadastrar">Cadastrar</button>

    </form>
    
    <a href="home.php">Voltar</a>

  </div>
</body>

</html>