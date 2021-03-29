<?php require 'header.php' ?>
<br><br>
<br>
<br>
<br>
<br>
<h2>Cadastrar o Produto</h2>
  <hr>
    <form action="..\control\produtos.php?action=cadastroProduto" method="post">

      <div class="form-group">
        <label for="nomeproduto">Nome do Produto</label>
        <input type="text" class="form-control" id="nomeProduto" name="nomeProduto">
      </div>

      <div class="form-group">
        <label for="senha">Preço</label>
        <input type="decimal" class="form-control" id="precoProduto" name="precoProduto">
      </div>

      <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1"  name="descricaoProduto" rows="5"></textarea>
      </div>

      <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar Produto">

    </form>

    <br>

    </div>



<?php require 'footer.php' ?>