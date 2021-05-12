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

	<div class="borda"></div>

</section>

<section> <!--  Section Sobre -->
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
</section>

<section> <!--  Section Modos de Jogo -->

	<div id="div-ModosDeJogo">

	</div>

</section>
	</div>
<section> <!--  Section Fim e rodapé -->
	<div id="div-discord">
		<a href="https://discord.com/"><div id="imagem-discord"></div></a>
		<a href="https://discord.com/" id="link-discord"><button id="frase-discord">JÁ CONHECE NOSSO DISCORD!?</button></a>
		<iframe id="iframe-discord" src="https://discord.com/widget?id=704695441677221898&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
	</div>

	<?php require 'footer.php'; ?>
</section>


<script> //O BAGULHO
var width = screen.width;
var height = screen.height;
function scroll(){
	//if que pega resolução e caso seja maior que o proposto ele linka o css q faz o scroll funcionar
	if(width >= 1200 && height >= 751){
		document.write("<link rel='stylesheet' type='text/css' href='../../assets/css/onepage-scroll.css'/>");
$(".secondBodyClass").onepage_scroll({
   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
   easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                    // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
   animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
   updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
   beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
   afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
   loop: true,                     	// You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
   keyboard: true,                  // You can activate the keyboard controls
   responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                                    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                                    // the browser's width is less than 600, the fallback will kick in.
   direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
})}else{
	document.getElementById('secondBody').classList.remove('secondBodyClass');
}};
scroll();
</script>


