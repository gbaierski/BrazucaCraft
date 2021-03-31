<?php require 'header.php' ?>

<div id="logo"></div>
<div class="background-home">

	<div class="clear"></div>
	
	<div class="tooltip">
		<button id="botao-ip" class="botao-ip" onclick="copiarIp()" onmouseout="tirouMouse()">
			<input type="text" id="ip-home" value="mc.brazucacraft.net" readonly></input>
			<span class="tooltiptext" id="myTooltip"><img src="../../assets/img/icons/copiar.png" id="backgroundTooltip"></span>
		</button>
	</div>

	<div class="clear"></div>

	<div id="div-players">5297<img src="../../assets/img/icons/players.png" id="icon-players"></div>
	<div id="div-jogadoresOnline">JOGADORES ONLINE</div>

	<div class="informacao-home">
		<a href="https://discord.com/" ><img src="../../assets/img/icons/discord.png" class="redeSocial-home"></a>
		<a href="https://www.facebook.com/" ><img src="../../assets/img/icons/facebook.png" class="redeSocial-home"></a>
		<a href="https://twitter.com/" ><img src="../../assets/img/icons/twitter.png" class="redeSocial-home"></a>
		<a href="https://www.instagram.com/" ><img src="../../assets/img/icons/instagram.png" class="redeSocial-home"></a>
	</div>
</div>

<div class="clear"></div>
<div id="div-discord">
	<a href="https://discord.com/"><div id="imagem-discord"></div></a>
	<a href="https://discord.com/" id="link-discord"><button id="frase-discord">JÁ CONHECE NOSSO DISCORD!?</button></a>
	<iframe id="iframe-discord" src="https://discord.com/widget?id=704695441677221898&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
</div>
<?php require 'footer.php'; ?>