<!-- REMOVER -->
<body style="background-image: url('../../assets/img/paginas/telaManutencao.jpg')">
    <div style="color:white; text-align:center; font-size:2vw; padding-top:15vw; font-family: NotoSans; font-weight: 700;"> Por favor, digite a senha para o acesso:</div>
    <form action="" method="POST">
        <input type="text" name="senhaProvisoria" style="color:white; text-align:center; background-color: transparent; color: white; transition: 0.5s; -webkit-transition: 0.5s; outline: none; border: 0.28vw solid #ccc; margin-left:40%; width: 20%; margin-top:2vw; height:2vw; font-size: 1.5vw;">
        <br>
        <input type="submit" value="Enviar" style= "background-color: rgb(22, 163, 69); border-left: none; border-top: none; font-weight: 700; font-family: NotoSans; color: white; cursor: pointer; margin-left:45%; width: 10%; height:3vw; margin-top:1vw; border-bottom: 0.2vw solid rgba(10, 10, 10, 0.4); border-right: 0.2vw solid rgba(10, 10, 10, 0.4); text-shadow: 0.08vw 0.10vw rgba(0, 0, 0, 0.651); font-size: 1.6vw;">
        <input type="hidden" name='verificaPrimeira' value="0" id="hidden">
    </form>

    <?php 
        if (isset($_POST['senhaProvisoria']) && $_POST['senhaProvisoria'] == 'Brasil1235') {

            header("location: ../control/redirecionamento.php?action=index");
        } else {
            echo'<script> document.getElementById("hidden").value = 1; </script>';
            if (@$_POST['verificaPrimeira'] == 1) {
                echo'<script> alert("senha incorreta"); </script>';
            }
        }
    ?>
</body>
