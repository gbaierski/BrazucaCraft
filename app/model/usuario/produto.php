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



        $sql = "INSERT INTO produtos (nomeProduto, precoProduto, descricaoProduto) VALUES ('$nomeProduto','$precoProduto', '$descricaoProduto')";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);

    }

    function deletaProduto($idProduto){

        $sql = "DELETE FROM produtos WHERE ai_produto = $idProduto ";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);
        
    }

    function pegaproduto($idProduto){
        $pesquisa = "SELECT * FROM produtos WHERE ai_produto = $idProduto ";
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
    function editarProduto($idProduto, $nomeProduto, $precoProduto , $descricaoProduto){

        $sql = "UPDATE produtos SET nomeProduto = '$nomeProduto' , descricaoProduto = '$descricaoProduto', precoProduto = '$precoProduto' WHERE produtos.ai_produto = $idProduto";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);
        
    }

}

