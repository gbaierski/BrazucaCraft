<?php require '../view/header.php' ?>

<body>
  <head>
    <meta charset="UTF-8">
    <title><?=$nomePagina?></title>
  </head>
  <div id="backgroundCadastroUsuario">

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
    <div id="cadastroDiv">
      <div id="tituloCadastroUsuario">Cadastro</div>
      <form action="..\control\usuario.php?action=cadastrar" method="post">

        <div>
          <label for="login" class="cadastroUsuarioLabel">Nick:</label>
          <input type="text" id="cadastroUsuarioLogin" name="login" required autofocus class="cadastroUsuario" pattern="[a-zA-Z0-9]+">
        </div>

        <div>
          <label for="senha" class="cadastroUsuarioLabel">Senha:</label>
          <input type="password" id="cadastroUsuarioSenha" name="senha" required class="cadastroUsuario">
        </div>

        <div>
          <label for="senha_repetida" class="cadastroUsuarioLabel">Repetir senha:</label>
          <input type="password" id="cadastroUsuarioSenhaRepetida" name="senha_repetida" required class="cadastroUsuario">
        </div>

        <button type="submit" name="cadastrar" id="cadastroUsuarioContinuar" class="verde">Continuar</button>
      </form>
      
      <a href="../control/redirecionamento.php?action=index"><button id="cadastroUsuarioVoltar" class="vermelho">Voltar</button></a>
    </div>
  </div>

<?php require '../view/footer.php' ?>