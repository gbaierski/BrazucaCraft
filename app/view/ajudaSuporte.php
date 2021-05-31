<?php 
require 'header.php';

$problema = $_GET['problema'];

$consulta = [
    1 => ["Não consigo me logar", "Tomole"], 
    2 => ["O que? Gustavo Baierski, a maior mente gamer da historia!", "Gustavo Baierski também conhecido por <i>GUSTAVO BAIERSKI</i>, hoje foi declarado como o maior gamer do seculo.
    Internatuas comentam: O nivel de gameplay dele é sem precedentes, nunca vimos algo parecido. Afirmam pesquisadores que a mente desse homem é capaz de processar quantidades
    de dados massivas em segundos, superando facilmente todas as grande mentes que já pisaram nesse planeta. Sem duvidas respirar o mesmo ar desse ser inigualavel pode ser o
    motivo de vida de centenas de milhares de pessoas ao redor do mundo."], 
    3 => ["Jovem de 20 anos fica rico usando está tecnica", "Um jovem de 20 anos chamado The Soethe ganha a vida jogando no bixo, investindo esse dinheiro na bolsa de valores
    e usando o dinheiro ganho para jogar na trimania. Em entrevista ele afirma: Somente para os praticantes da foda. Percebe-se que são essas as palavras de alguem com uma
    mente muito além da propria idade. Agora ele desistiu de ficar rico e quer ajudar VOCÊ a ficar rico também, quer saber como? Arrasta pra cima."], 
    4 => ["Texto aleatório", "SIM"],
    5 => ["Problema A Jogo", "EEEE"],
    6 => ["Problema B Jogo", "FFFF"], 
    7 => ["Problema C Jogo", "GGGG"], 
    8 => ["Problema D Jogo", "HHHH"]];
?>

<a href="../control/redirecionamento.php?action=ajuda">
    <button class="botaoVoltar" id="voltarParaAjudaProblema">Voltar para Ajuda</button>
</a>

<section id="secaoAjudaSuporte"> 
    <h3 id="tituloProblemaAjuda"><?= $consulta[$problema][0] ?></h3>
    <div id="mensagemProblemaAjuda">Descreva detalhadamente seu problema, entraremos em contato para te ajudar!</div>
    <textarea id="descricaoProblemaAjuda" rows="5" pattern="[a-zA-Z0-9]+" required maxlength="2050"></textarea>
    <input type="submit" id="enviarProblemaAjuda"></input>
</section>

<div class="clear"></div>

<?php require 'footer.php'; ?>