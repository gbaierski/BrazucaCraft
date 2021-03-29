<?php 
 require ('..\..\infra\connection.php');

class Produto {
    public $conexao;
    
    public function __construct() {
        $this->conexao = new Connection();  
    }

    function pegarProdutos(){
        $pesquisa = 'SELECT * FROM produtos';
        $exec= mysqli_query($this->conexao->getConnection(), $pesquisa); 
        

       if(mysqli_num_rows($exec) != 0 ) {
            
            while( $row = mysqli_fetch_array($exec) ){
                $produtos[] = $row; 
            }
            return $produtos;

        } else {
            
           
            return false;
        }
    }


}