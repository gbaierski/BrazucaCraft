function copiarIp() {

    var textoCopiado = document.getElementById("ip-home");
    var imgTooltip = document.getElementById("backgroundTooltip");

    textoCopiado.select();
    textoCopiado.setSelectionRange(0, 99999); /* mobile */

    document.execCommand("copy");

    imgTooltip.src = "../../assets/img/icons/visto.png";

}

function tirouMouse() {

    var imgTooltip = document.getElementById("backgroundTooltip");
    imgTooltip.src = "../../assets/img/icons/copiar.png";
}
