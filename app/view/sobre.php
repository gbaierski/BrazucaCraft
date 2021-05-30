<?php 

require ('header.php'); 

$diretores = ['Davidorp','HimaruBlack','PaulinPaulera','Komlow','SrDog_'];
$gerentes = ['Kyoichi'];
$gestores = ['LucasLukey'];
$devsJogo = ['Steve','Rok','Carmello'];
$devsWeb = ['Asky_NT', 'TheSoethe', 'Pisle'];
$builders = ['SrDougk','Priih_'];
$admins = ['Steve','Steve','Steve','Steve','Steve','Steve','Steve','Steve','Steve',];
$moderadores = ['Steve','Steve','Steve','Steve','Steve','Steve','Steve'];
$ajudantes = ['Uragan'];

function pegarHead($nick) {

    $url = "https://api.mojang.com/users/profiles/minecraft/" . $nick;

    $json = file_get_contents($url);
    $player = json_decode($json);
    
    $head = "https://crafatar.com/avatars/". $player->id . "?size=100";
    return $head;

}

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
        <?php foreach($diretores as $diretor) { ?>
            <div class="dadosMembro espacoHead5">
                <?php $headPlayer = pegarHead($diretor)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$diretor?></div>
            </div>
        <?php } ?>
    </div>

    <div class="equipesBrazuca" id="gerentesBrazuca">
        <div class="tituloEquipeBrazuca">Gerentes</div>
        <?php foreach($gerentes as $gerente) { ?>
            <div class="dadosMembro espacoHead1">
                <?php $headPlayer = pegarHead($gerente)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$gerente?></div>
            </div>
        <?php } ?>
    </div>

    <div class="equipesBrazuca" id="gestoresBrazuca">
        <div class="tituloEquipeBrazuca">Gestores</div>
        <?php foreach($gestores as $gestor) { ?>
            <div class="dadosMembro espacoHead1">
                <?php $headPlayer = pegarHead($gestor)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$gestor?></div>
            </div>
        <?php } ?>
    </div>

    <div class="equipesBrazuca" id="devJogoBrazuca">
        <div class="tituloEquipeBrazuca">Desenvolvedores Server</div>
        <?php foreach($devsJogo as $devJogo) { ?>
            <div class="dadosMembro espacoHead3">
                <?php $headPlayer = pegarHead($devJogo)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$devJogo?></div>
            </div>
        <?php } ?>
    </div>

    <div class="equipesBrazuca" id="devWebBrazuca">
        <div class="tituloEquipeBrazuca">Desenvolvedores Web</div>
        <?php foreach($devsWeb as $devWeb) { ?>
            <div class="dadosMembro espacoHead3">
                <?php $headPlayer = pegarHead($devWeb)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$devWeb?></div>
            </div>
        <?php } ?>
    </div>

    <div id="buildersBrazuca">
        <div class="tituloEquipeBrazuca">Builders</div>
        <?php foreach($builders as $builder) { ?>
            <div class="dadosMembro espacoHead2">
                <?php $headPlayer = pegarHead($builder)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$builder?></div>
            </div>
        <?php } ?>
    </div>

    <div id="administradoresBrazuca">
        <div class="tituloEquipeBrazuca">Administradores</div>
        <?php foreach($admins as $admin) { ?>
            <div class="dadosMembro espacoHead5">
                <?php $headPlayer = pegarHead($admin)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$admin?></div>
            </div>
        <?php } ?>
    </div>

    <div id="moderadoresBrazuca">
        <div class="tituloEquipeBrazuca">Moderadores</div>
        <?php foreach($moderadores as $moderador) { ?>
            <div class="dadosMembro espacoHead5">
                <?php $headPlayer = pegarHead($moderador)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$moderador?></div>
            </div>
        <?php } ?>
    </div>

    <div id="ajudantesBrazuca">
        <div class="tituloEquipeBrazuca">Ajudantes</div>
        <?php foreach($ajudantes as $ajudante) { ?>
            <div class="dadosMembro espacoHead1">
                <?php $headPlayer = pegarHead($ajudante)?>
                <img class="headSobre" src="<?=$headPlayer?>">
                <div class="nickSobre"><?=$ajudante?></div>
            </div>
        <?php } ?>
    </div>
</section>

<div class="clear"></div>

<?php require 'footer.php'; ?>