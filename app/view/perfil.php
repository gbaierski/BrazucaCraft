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
  
  $data = $usuario->getPlayerAtivo();

  ?>

<html >

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


<canvas id="myChart" style="background-color: white;"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const labels = [
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
  'Dezembro',
];
const data = {
  labels: labels,
  datasets: [{
    label: 'Jogadores Ativos',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: [ <?php echo $data; ?> ],
  }]
};

const config = {
  type: 'line',
  data,
  options: {}
};

var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

</script>
<?php
}
?>

