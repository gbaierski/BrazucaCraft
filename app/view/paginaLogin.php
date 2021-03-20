<?php
                                  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login PHP OO</title>


</head>
<body>
  <div>

  <?php

    if(isset($_GET['erro'])) {
      echo '<div class="alert alert-danger">O soethe é gay</div>';
    }

    if(isset($_GET['success'])) {
      echo '<div class="alert alert-success">Logout efetuado com sucesso</div>';
    }

  ?>
  <h2>Login</h2>
  <hr>
    <form action="..\model\logarUsuario.php" method="post">

      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login">
      </div>

      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
      </div>

      <input type="submit" class="btn btn-primary" name="logar" value="Logar">

    </form>

    <br>

    <a href="paginaCadastro.php">Cadastre-se</a>

    </div>

   </body>

   </html>