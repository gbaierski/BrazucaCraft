<?php require "../view/header.php"; ?> 

<section id="categoriasLoja">

        <a href="../control/redirecionamento.php?action=index">
            <button class="botaoVoltar" id="voltarParaHomeLoja">Voltar para a Home</button>
        </a>

        <div id="tituloHomeLoja">Loja</div>

        <div id="backgroundVips" class="itemLoja">
            <a href="../control/redirecionamento.php?action=paginaVips">
                <div id="vips">
                    <div id="textoVip">VIPS BRAZUCA</div>
                </div>
            </a>
        </div>
        
        <a href="../control/redirecionamento.php?action=paginaCosmeticos">
            <div id="cosmeticos"  class="itemLoja">
                <img src="../../assets/img/paginas/loja/cosmeticosBackground.png" id="imagemCosmeticos">
                <div  class="tituloItensLoja" id="textoCosmeticos">COSMÉTICOS</div>
            </div>
        </a>
        
        <a href="../control/redirecionamento.php?action=paginaMoedas">
            <div id="moedas" class="itemLoja">
                <img src="../../assets/img/paginas/loja/moedasBackground.png" id="imagemMoedas">
                <div class="tituloItensLoja" id="textoMoedas">MOEDAS</div>
            </div>
        </a>
        
        <a href="../control/redirecionamento.php?action=paginaBoosters">
            <div id="boosters" class="itemLoja">
                <img src="../../assets/img/paginas/loja/boosterBackground.png" id="imagemBoosters">
                <div class="tituloItensLoja" id="textoBoosters">BOOSTERS</div>
            </div> 
        </a> 

        <div class="clear" class="itemLoja"></div>

        <a href="../control/redirecionamento.php?action=paginaCaixas">
            <div id="caixasMisteriosas" class="itemLoja">
                <img src="../../assets/img/paginas/loja/caixasMisteriosasBackground.png" id="imagemCaixa">
                <div class="tituloItensLoja" id="textoCaixas">CAIXAS MISTERIOSAS</div>
            </div>
        </a>

        <a href="../control/redirecionamento.php?action=paginaParceiros">
            <div id="parceiros" class="itemLoja">
                <img src="../../assets/img/paginas/loja/parceirosBackground.png" id="imagemParceiros">
                <div class="tituloItensLoja" id="textoParceiros">PARCEIROS</div>
            </div> 
        </a>

        <a href="../control/redirecionamento.php?action=paginaUnban">
            <div id="unban" class="itemLoja">
                <img src="../../assets/img/paginas/loja/unbanBackground.png" id="imagemUnban">
                <div class="tituloItensLoja" id="textoUnban">UNBAN</div>
            </div> 
        </a>
</section>

<div class="clear"></div>
<?php require '../view/footer.php'; ?>