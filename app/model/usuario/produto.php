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

    function cadastraProdutos($nomeProduto, $precoProduto , $descricaoProduto){
        $sql = "INSERT INTO produtos (nomeProduto, precoProduto, decricaoProduto) VALUES ('$nomeProduto','$precoProduto', '$descricaoProduto')";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);

        if(mysqli_affected_rows($this->conexao->getConnection()) > 0) {
            return true;
        } else {
            return false;
        }
    }

}