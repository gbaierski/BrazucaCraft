<?php require 'header.php' ?>
<br>
<h2>Cadastrar o Produto</h2>
  <hr>
    <form action="..\control\produtos.php?action=cadastroproduto" method="post">

      <div class="form-group">
        <label for="login">Nome do Produto</label>
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



<?php require 'footer.php' ?>