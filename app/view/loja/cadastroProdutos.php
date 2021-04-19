<?php 
require ('..\..\infra\connection.php');
require ('..\model\usuario\classUsuario.php');
session_start();
$usuario = new Usuario();
$usuario->DeclaraUsuario();

if($usuario->getPermissao() == "Administrador") {

    require ('../view/header.php');
?>

<div class="clear"></div>
<div id="background-cadastroProduto">
    <div id="div-cadastroProduto">
        <h2 id="cadastroProduto-titulo"><?= $nomeForm ?></h2>

                <form action="<?= $nomeForm == 'Cadastro de Produto' ? '..\control\produtos.php?action=cadastroProduto' : '..\control\produtos.php?action=editarProduto&ai_produto='. $produtos['ai_produto']?>" enctype="multipart/form-data" method="post" id="form-cadastroProdutos">

                    <label for="nomeproduto" class="label-cadastroProduto" placeholder="<?= isset($produtos['nomeProduto']) ? $produtos['nomeProduto'] : ''?>">Nome do Produto:</label>
                    <input  value="<?= isset($produtos['nomeProduto']) ? $produtos['nomeProduto'] : ''?>" type="text" name="nomeProduto"  class="cadastroProduto" id="nomeProduto" pattern="[a-zA-Z0-9]+">

                    <label for="precoProduto" class="label-cadastroProduto" placeholder="<?= isset($produtos['precoProduto']) ? $produtos['precoProduto'] : ''?>">Preço:</label>
                    <input value="<?= isset($produtos['precoProduto']) ? $produtos['precoProduto'] : ''?>" type="text" name="precoProduto" class="cadastroProduto" id="precoProduto">

                    <label for="imagemProduto" class="label-cadastroProduto" id="imagemLabel">Imagem: </label>
                    <input name="imagemProduto" type="file" id="imagemProduto">
            
                    <label   for="descricaoProduto" class="label-cadastroProduto" id="label-descricaoProduto" placeholder="<?= isset($produtos['descricaoProduto']) ? $produtos['descricaoProduto'] : ''?>">Descrição:</label>
                    <textarea value="<?= isset($produtos['descricaoProduto']) ? $produtos['descricaoProduto'] : ''?>" name="descricaoProduto" class="cadastroProduto" id="descricaoProduto" rows="5" pattern="[a-zA-Z0-9]+"><?= isset($produtos['descricaoProduto']) ? $produtos['descricaoProduto'] : '' ?></textarea>

                    <div class="clear"></div>

                    <input type="submit" name="cadastrarProduto" value=" <?= $nomeForm == 'Cadastro de Produto' ? 'Cadastrar' : 'Editar' ?>" id="botao-cadastrarProduto">
            </form>
    </div>
</div>

<?php 
require '../view/footer.php';
} else {
    header("location: ../control/redirecionamento.php?action=Index");
}
?>