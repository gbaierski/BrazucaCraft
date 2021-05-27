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
				</div>
				<div class=" itemCarrossel proximo">
					<img src="../../assets/img/updates/update2.jpg">
				</div>
				<div class="itemCarrossel">
					<img src="../../assets/img/updates/update3.jpg">
				</div>
				<div class="itemCarrossel">
					<img src="../../assets/img/updates/update4.jpg">
				</div>
				<div class="itemCarrossel anterior">
					<img src="../../assets/img/updates/update5.jpg">
				</div>
				<div class="secaoBotoesCarrossel">
					<div class="botaoCarrossel"><img src="../../assets/img/icons/seta.png" class="icon-setaCarrossel"></div>
					<div class="botaoCarrossel"><img src="../../assets/img/icons/setaVirada.png" class="icon-setaCarrossel"></div>
				</div>
			</div>
		</div>
	</section>

	<div class="clear"></div>

	<!--  Section Fim e rodapé -->
	<section>
		<div id="div-discord">
			<div id="imagem-discord"></div>
			<a href="https://discord.com/" id="link-discord"><button id="frase-discord">JÁ CONHECE NOSSO DISCORD!?</button></a>
			<iframe id="iframe-discord" src="https://discord.com/widget?id=704695441677221898&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
		</div>
	</section>
	<section>
			<div id="div-Ajuda" style="height:30vw;">
			</div>


	<script src="../view/outrosJS/carrossel.js"></script>
	<script src="../view/homeScroll.js"></script><!--Esse include deve estar sempre abaixo das sections e dentro da Home-->
<?php require 'footer.php'; ?>
