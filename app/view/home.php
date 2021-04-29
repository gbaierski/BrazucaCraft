<?php require 'header.php' ?>

<div id="logo"></div>
<div class="background-home">

	<div class="clear"></div>
	<div class="tooltip">
		<button id="botao-ip" class="botao-ip verde" onclick="copiarIp()" onmouseout="tirouMouse()">
			<input type="text" id="ip-home" value="brazucacraft.mc.gg" readonly></input>
			<span class="tooltiptext" id="myTooltip"><img src="../../assets/img/icons/copiar.png" id="backgroundTooltip"></span>
		</button>
	</div>

	<div id="div-playersOnline">5.2K <img src="../../assets/img/icons/players.png" id="icon-players"></div></div>

	<div class="clear"></div>

	<div id="div-copiarIP">CLIQUE PARA COPIAR</div>

	<div class="informacao-home">
		<a href="https://discord.com/" ><img src="../../assets/img/icons/discord.png" class="redeSocial-home"></a>
		<a href="https://www.facebook.com/" ><img src="../../assets/img/icons/facebook.png" class="redeSocial-home"></a>
		<a href="https://twitter.com/brazucamc" ><img src="../../assets/img/icons/twitter.png" class="redeSocial-home"></a>
		<a href="https://www.instagram.com/" ><img src="../../assets/img/icons/instagram.png" class="redeSocial-home"></a>
	</div>
</div>


<div class="borda"></div>

<div class="clear"></div>

<div id="div-SobreBrazuca">
	<div id="div-Sobre_ModosDeJogo">
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

<div class="clear"></div>

<div id="div-ModosDeJogo">

</div>

<div class="clear"></div>
<div id="div-discord">
	<a href="https://discord.com/"><div id="imagem-discord"></div></a>
	<a href="https://discord.com/" id="link-discord"><button id="frase-discord">JÁ CONHECE NOSSO DISCORD!?</button></a>
	<iframe id="iframe-discord" src="https://discord.com/widget?id=704695441677221898&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
</div>
<?php require 'footer.php'; ?>
