function copiarIp() {

    var textoCopiado = document.getElementById("ip-home");
    var tooltip = document.getElementById("myTooltip");

    textoCopiado.select();
    textoCopiado.setSelectionRange(0, 99999); /* mobile */

    document.execCommand("copy");

    tooltip.innerHTML = "Copiado!";

}

function tirouMouse() {

    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Clique para copiar o IP!";
  }

