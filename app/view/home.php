<?php require 'header.php' ?>
<!---  Função que roda o scroll lock no site, dentro dela tem um if que funciona apenas em resoluções de monitores --->
<script src='../view/jquery.onepage-scroll.js'></script>

	<section> <!--  Section Tela Inicial -->
		<div id="logo"></div>
		<div class="background-home">
			<div class="clear"></div>
			<div class="tooltip">
				<button id="botao-ip" class="botao-ip verde" onclick="copiarIp()" onmouseout="tirouMouse()">
					<input type="text" id="ip-home" value="brazucacraft.mc.gg" readonly></input>
					<span class="tooltiptext" id="myTooltip"><img src="../../assets/img/icons/copiar.png" id="backgroundTooltip"></span>
				</button>
			</div>

			<div id="div-playersOnline">5.2K <img src="../../assets/img/icons/players.png" id="icon-players"></div>

			<div class="clear"></div>

			<div id="div-copiarIP">CLIQUE PARA COPIAR</div>
		
			<div class="informacao-home">
				<a href="https://discord.com/" ><img src="../../assets/img/icons/discord.png" class="redeSocial-home"></a>
				<a href="https://www.facebook.com/" ><img src="../../assets/img/icons/facebook.png" class="redeSocial-home"></a>
				<a href="https://twitter.com/brazucamc" ><img src="../../assets/img/icons/twitter.png" class="redeSocial-home"></a>
				<a href="https://www.instagram.com/" ><img src="../../assets/img/icons/instagram.png" class="redeSocial-home"></a>
			</div>
		</div>

</section>

<section> <!--  Section Sobre -->
	<div id="div-SobreBrazuca">
		<div id="div-BackgroundSobre">
			<div id="titulo-SobreBrazuca">O que é o BrazucaCraft?</div>
			<p id="descricaoSuperior-SobreBrazuca"  class="descricao-SobreBrazuca">
			O BrazucaCraft surgiu de uma ideia entre amigos para divertir um servidor no Discord, ainda em 2020. Porém, a construção do servidor tomou maiores e mais elaboradas proporções, onde passou a ser buscada a temática de união entre o modo roleplay e o famoso modo dos minigames. 
			</p>
			<br>
			<p class="descricao-SobreBrazuca">
			Uma proposta nova no Brasil, nosso servidor pretende chegar para ficar no mercado de servidores de minecraft - assim como buscará a expansão para demais setores. Se quer saber mais da nossa história, clique aqui.
			</p>
			<img id="imagem-SobreBrazuca" src="../../assets/img/paginas/home/sobreHome.png">

			<div class="notaMojang" id="notaPortugues"><b>IMPORTANTE: NÃO é um produto oficial do Minecraft. NÃO é aprovado e nem associado à Mojang.</b></div>
			<div class="notaMojang"><b>IMPORTANT: NOT official Minecraft product. NOT approved by or associated with Mojang.</b></div>
		</div>
	</div>
</section>

<section> <!--Section Novidades-->
	<div id="div-Novidades">
		<div id="div-BackgroundNovidades">
			<div id="titulo-Novidades"> Novidades </div>
			<div class="carrosselNovidades">
				<div class="itemCarrossel ativo">
					<img src="../../assets/img/updates/update1.jpg">
					Jungle Update
				</div>
				<div class=" itemCarrossel proximo">
					<img src="../../assets/img/updates/update2.jpg">
					Badlands Update
				</div>
				<div class="itemCarrossel">
					<img src="../../assets/img/updates/update3.jpg">
					Nether Update
				</div>
				<div class="itemCarrossel">
					<img src="../../assets/img/updates/update4.jpg">
					Mega Taiga Update
				</div>
				<div class="itemCarrossel anterior">
					<img src="../../assets/img/updates/update5.jpg">
					Dark Forest Update
				</div>
				<div class="secaoBotoesCarrossel">
					<div class="botaoCarrossel"><img src="../../assets/img/icons/seta.png" class="icon-setaCarrossel"></div>
					<div class="botaoCarrossel"><img src="../../assets/img/icons/setaVirada.png" class="icon-setaCarrossel"></div>
				</div>
			</div>
		</div>
	</section>

	<div class="clear"></div>


	<section>
		<div id="div-discord">
			<div id="imagem-discord"></div>
			<a href="https://discord.com/" id="link-discord"><button id="frase-discord">JÁ CONHECE NOSSO DISCORD!?</button></a>
			<iframe id="iframe-discord" src="https://discord.com/widget?id=704695441677221898&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
		</div>
	</section>

	<div class="clear"></div>

	<section>
		<div id="tituloSlideEquipe">Conheça nossa equipe!</div>
		<div id="slideEquipe">

		<?php

			$membrosStaff = [1 => 'Davidorp', 2 =>'HimaruBlack', 3 =>'PaulinPaulera', 4 =>'KOMLOW', 5 =>'SrDog_', 6 =>'Kyoichi_', 7 =>'LucasLukey', 8 =>'JLFranco_JJ', 9 =>'Asky_NT'];
			$descricaoMembros = [1 => 'Brabo teste teste testetesteteste testetestetestetestete steteste teste testetesteteste teste testetestetestetesteteste teste', 2 =>'Brabo2', 3 =>'Brabo3', 4 =>'Brabo4', 5 =>'Brabo5', 6 =>'Brabo6', 7 =>'Brabo7', 8 =>'Brabo8', 9 =>'Brabo9'];
			$titulosMembros = [
				1 => ['titulo' => 'Diretor', 'cor' => '#be0000'], 
				2 => ['titulo' => 'Diretor', 'cor' => '#be0000'], 
				3 => ['titulo' => 'Diretor', 'cor' => '#be0000'], 
				4 => ['titulo' => 'Diretor', 'cor' => '#be0000'], 
				5 => ['titulo' => 'Diretor', 'cor' => '#be0000'], 
				6 => ['titulo' => 'Gerente', 'cor' => '#5400b4'],
				7 => ['titulo' => 'Gestor', 'cor' => '#e4005f'],
				8 => ['titulo' => 'Líder da equipe Dev - Servidor', 'cor' => '#37deac'],
				9 => ['titulo' => 'Líder da equipe Dev - Site', 'cor' => '#0086f3'],
			];

			include ('../control/getSkin.php');
		?>

<?php foreach($membrosStaff as $key => $staff) { ?>

		<?php $bodyStaff = pegarBody($staff); ?>
		<div class="slideEquipe fadeEquipe">
			<img src="<?= $bodyStaff ?>" class="imagemMembroEquipeHome">
			<div class="tituloMembroEquipe"  style="color: <?= $titulosMembros[$key]['cor']?>"><?= $titulosMembros[$key]['titulo']?></div>
			<div class="descricaoMembroStaff" style=""> <?= $descricaoMembros[$key]; ?></div>
			<div class="nickStaff"><?= $staff ?></div>
		</div>

<?php } ?>
		<div class="clear"></div>
		<a class="anteriorEquipe" onclick="plusSlides(-1)"><img src="../../assets/img/icons/seta.png" class="icon-setaCarrosselEquipe"></a>
		<a class="proximoEquipe" onclick="plusSlides(1)"><img src="../../assets/img/icons/setaVirada.png" class="icon-setaCarrosselEquipe"></a>

		</div>
		<br>

		<div style="text-align:center">
			<?php
				foreach($membrosStaff as $staff) {
					$head = pegarHead($staff);
					echo '<span class="ponto" onclick="currentSlide('. array_search($staff, $membrosStaff).')"><img src="'.$head.'" class="headStafferHome"></span>'; 
				} 
			 ?> 
		</div>
		<div id="restanteEquipeHome"><a id="linkRestanteEquipe" href="../control/redirecionamento.php?action=sobre">Conheça o restante da nossa equipe aqui!</a></div>
		
	</section>

	<!--  Section Fim e rodapé -->
	<section>
			<div id="div-Ajuda">
				<div id="parteAjuda">
					<img id="imagemAjuda" src="../../assets/img/paginas/home/logo.png">
					<div id="tituloAjuda">Precisa de ajuda?</div>
					<div id="textoAjuda"> Caso esteja com algum problema relacionado ao nosso servidor ou à nosso site, clique no botão <b>"Preciso de ajuda"</b>. Caso deseje informações relacionadas à parcerias ou nossos termos, por favor consulte nosso <b>rodapé</b> (seção abaixo).</div>
					<a href="../control/redirecionamento.php?action=ajuda"><button id="botaoSecaoAjuda">Preciso de Ajuda</button></a>
				</div>
			</div>

	<script src="../view/outrosJS/slideEquipe.js"></script>
	<script src="../view/outrosJS/carrosselNovidades.js"></script>
	<script src="../view/outrosJS/homeScroll.js"></script><!--Esse include deve estar sempre abaixo das sections e dentro da Home-->
<?php require 'footer.php'; ?>
