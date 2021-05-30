<?php 

require ('header.php'); 

$diretores = ['Davidorpz','HimaruBlack','PaulinPaulera','Komlow','SrDog'];
$gerentes = ['Kyoichi'];
$gestores = ['LucasLukey'];
$devJogo = ['JCraftPlay','Rok','Carmello'];
$devWeb = ['Asky_NT', 'TheSoethe', 'Pisle'];
$builders = ['SrDougk','Priih'];
$admins = [''];
$moderadores = [''];
$ajudantes = ['Uragan'];

?>

<a href="../control/redirecionamento.php?action=index">
    <button class="botaoVoltar" id="voltarParaHomeSobre">Voltar para a Home</button>
</a>

<div id="tituloPaginaSobre">
    Sobre o BrazucaCraft
</div>

<p id="descricaoHistoricaSobre">
Aqui deve haver uma descrição com uma contextualização mais "histórica" do BrazucaCraft, explicando como surgiu a ideia, o progresso e também como os participantes da equipe se conheceram e então resolveram construir o BrazucaCraft!
</p>

<div class="notaMojang" id="notaPortugues"><b>IMPORTANTE: NÃO é um produto oficial do Minecraft. NÃO é aprovado e nem associado à Mojang.</b></div>
<div class="notaMojang"><b>IMPORTANT: NOT official Minecraft product. NOT approved by or associated with Mojang.</b></div>

<section id="equipeBrazucaSobre">
    <div id="tituloEquipeBrazuca">Conheça nossa equipe!</div>

    <div id="diretoresBrazuca">
        <div class="tituloEquipeBrazuca">Diretores</div>
    </div>

    <div class="equipesBrazuca" id="gerentesBrazuca">
        <div class="tituloEquipeBrazuca">Gerentes</div>
    </div>

    <div class="equipesBrazuca" id="gestoresBrazuca">
        <div class="tituloEquipeBrazuca">Gestores</div>
    </div>

    <div class="equipesBrazuca" id="devJogoBrazuca">
        <div class="tituloEquipeBrazuca">Desenvolvedores Server</div>
    </div>

    <div class="equipesBrazuca" id="devWebBrazuca">
        <div class="tituloEquipeBrazuca">Desenvolvedores Web</div>
    </div>

    <div id="buildersBrazuca">
        <div class="tituloEquipeBrazuca">Builders</div>
    </div>

    <div id="administradoresBrazuca">
        <div class="tituloEquipeBrazuca">Administradores</div>
    </div>

    <div id="moderadoresBrazuca">
        <div class="tituloEquipeBrazuca">Moderadores</div>
    </div>

    <div id="ajudantesBrazuca">
        <div class="tituloEquipeBrazuca">Ajudantes</div>
    </div>
</section>

<div class="clear"></div>

<?php require 'footer.php'; ?>