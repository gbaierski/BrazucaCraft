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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div style="width: 100%; height:280px">
    <canvas id="playerAtivoAno" style="background-color: white;"></canvas>
  </div>
  <div style="width: 100%; height:280px">
    <canvas id="playerAtivoMes" style="background-color: white;"></canvas>
  </div>
  <div style="width: 100%; height:280px">
    <canvas id="comprasGanhosMes" style="background-color: white;"></canvas>
  </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

$(function () {
            var ctx = document.getElementById("playerAtivoAno").getContext('2d');
            var data = {
                datasets: [{
                    label: 'Players Ativos no ano',
                    data: [ <?php echo $dataPlayer; ?> ],
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                    ],
                }],
                labels: [
                  'Janeiro',
                  'Fevereiro',
                  'Março',
                  'Abril',
                  'Maio',
                  'Junho',
                  'Julho',
                  'Agosto',
                  'Setembro',
                  'Outubro',
                  'Novembro',
                  'Dezembro'
                ]
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
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                    ],
                  },
                  {
                    label: 'Compras do mes',
                    data: [ <?php echo $dataPlayer; ?> ],
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                    ],
                  }  
                ],
                labels: [
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7',
                    '8',
                    '9',
                    '10',
                    '11',
                    '12',
                    '13',
                    '14',
                    '15',
                    '16',
                    '17',
                    '18',
                    '19',
                    '20',
                    '21',
                    '22',
                    '23',
                    '24',
                    '25',
                    '26',
                    '27',
                    '28',
                    '29',
                    '30',
                    '31'
                ]
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

            var ctx_3 = document.getElementById("playerAtivoMes").getContext('2d');
            var data_3 = {
                datasets: [{
                    label: 'Players ativos no mes',
                    data: [ <?php echo $dataPlayer; ?> ],
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                    ],
                  } 
                ],
                labels: [
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7',
                    '8',
                    '9',
                    '10',
                    '11',
                    '12',
                    '13',
                    '14',
                    '15',
                    '16',
                    '17',
                    '18',
                    '19',
                    '20',
                    '21',
                    '22',
                    '23',
                    '24',
                    '25',
                    '26',
                    '27',
                    '28',
                    '29',
                    '30',
                    '31'
                ]
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

