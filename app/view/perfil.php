<?php

require ('header.php');
require ('..\..\infra\connection.php');
require ('..\model\usuario\classUsuario.php');

$usuario = new Usuario();

$usuario->DeclaraUsuario();

if($usuario->getPermissao() == "Usuario") {
  ?>
<!DOCTYPE html>
<html>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <form action="..\control\usuario.php?action=editarNome" method="post">
      <div>
        <label for="nome">Editar Nome</label>
        <input type="text" id="editarNomeNovo" name="editarNomeNovo">
      </div>

      <input type="submit" name="editarNome"value="editarNome">


</form>

<form action="..\control\usuario.php?action=editarSenha" method="post">
      <div>
        <label for="senha">Editar Senha</label>
        <input type="password " id="editarSenhaNova" name="editarSenhaNova">
      </div>

      <input type="submit" name="editarSenha"value="editarSenha">


</form>

</body>

</html>
  <?php 

} elseif($usuario->getPermissao() == "Administrador") {

  $dataPlayer = $usuario->getPlayerAtivo();
  $dataCompraDia = $usuario->getCompraDia();
  ?>

  <a href="../control/redirecionamento.php?action=index">
    <button class="botaoVoltar" id="voltarParaHomePerfil">Voltar para a Home</button>
  </a>

  <div class="tituloPerfil">Tela de Gestão</div>

  <div id="graficoPlayersAtivosAno" class="graficoGestao">
    <canvas id="playersAtivoAno" class="conteudoGraficoGestao"></canvas>
  </div>
  <div id="graficoPlayersAtivosMes" class="graficoGestao">
    <canvas id="playersAtivoMes" class="conteudoGraficoGestao"></canvas>
  </div>
  <div  id="graficoComprasGanhosMes" class="graficoGestao">
    <canvas id="comprasGanhosMes" class="conteudoGraficoGestao"></canvas>
  </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

$(function () {
            var ctx = document.getElementById("playersAtivoAno").getContext('2d');
            var data = {
                datasets: [{
                    label: 'Players Ativos no ano',
                    data: [ <?php echo $dataPlayer; ?> ],
                    backgroundColor: [
                        '#2ebe29',
                    ],
                }],
                labels: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro']
            };
            var myDoughnutChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });

            var ctx_2 = document.getElementById("comprasGanhosMes").getContext('2d');
            var data_2 = {
                datasets: [{
                    label: 'Ganhos do mes',
                    data: [ <?php echo $dataCompraDia; ?> ],
                    backgroundColor: [
                      'rgb(255, 146, 21)',
                    ],
                  },
                  {
                    label: 'Compras do mes',
                    data: [ <?php echo $dataPlayer; ?> ],
                    backgroundColor: [
                      '#2ebe29',
                    ],
                  }  
                ],
                labels: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']
            };
            var myDoughnutChart_2 = new Chart(ctx_2, {
                type: 'bar',
                data: data_2,
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });

            var ctx_3 = document.getElementById("playersAtivoMes").getContext('2d');
            var data_3 = {
                datasets: [{
                    label: 'Players ativos no mes',
                    data: [ <?php echo $dataPlayer; ?> ],
                    backgroundColor: [
                      '#2ebe29',
                    ],
                  } 
                ],
                labels: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']
            };
            var myDoughnutChart_3 = new Chart(ctx_3, {
                type: 'bar',
                data: data_3,
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });
        });

</script>
<?php
}
?>

<div class="clear"></div>

<?php require 'footer.php'; ?>

