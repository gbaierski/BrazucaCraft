<?php require 'header.php' ?>
<br>
<br>
<br>
<br>
<br>

<?php
// Teste de Banco
// print_r($produtos)?>
<div class="container">

<!-- Div da compra -->
<div class="row text-center">
<div class="col-lg-3 col-md-6 mb-4">
<?php foreach ($produtos as $produto): ?>

    <div class="card h-100">
      <img class="card-img-top" src="../../assets/img/vips/<?= $produto['imagemProduto']?>" alt="">
      <div class="card-body">
        <h4 class="card-title"><?= $produto['nomeProduto']?></h4>
        <p class="card-text"> <?= $produto['precoProduto']?> </p>
        <p class="card-text"> <?= $produto['descricaoProduto']?> </p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-success">Comprar</a>
        <? // Colocar id de SESSION para administrador ?> <a href="#" class="btn btn-danger">Editar</a>
      </div>
    </div>
  </div>


<?php endforeach ?>
</div> 
</div>




<?php require 'footer.php'; ?>