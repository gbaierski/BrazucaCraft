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

    function cadastraProdutos($nomeProduto, $precoProduto , $descricaoProduto, $imagemProduto){

        if($imagemProduto == ""){
            $sql = "INSERT INTO produtos (nomeProduto, precoProduto, descricaoProduto , imagemProduto) VALUES ('$nomeProduto','$precoProduto', '$descricaoProduto', 'padrao.png' )";
            $executa = mysqli_query($this->conexao->getConnection(), $sql);
        }else{
            $sql = "INSERT INTO produtos (nomeProduto, precoProduto, descricaoProduto , imagemProduto) VALUES ('$nomeProduto','$precoProduto', '$descricaoProduto', '$imagemProduto' )";
            $executa = mysqli_query($this->conexao->getConnection(), $sql);;
        }

        //$sql = "INSERT INTO produtos (nomeProduto, precoProduto, descricaoProduto , imagemProduto) VALUES ('$nomeProduto','$precoProduto', '$descricaoProduto', 'padrao.png' )";
        //$executa = mysqli_query($this->conexao->getConnection(), $sql);

    }

    function deletaProduto($idProduto){

        $sql = "DELETE FROM produtos WHERE ai_produto = $idProduto ";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);
        
    }

    function retornaProduto($ai_produto) {

        $pesquisa = "SELECT * FROM produtos WHERE ai_produto = $ai_produto ";
        $exec= mysqli_query($this->conexao->getConnection(), $pesquisa); 
        

       if(mysqli_num_rows($exec) != 0 ) {
 
            $produtos = mysqli_fetch_assoc($exec);
            return $produtos;

        } else {
            
           
            return false;
        }
    }
    function buscaEditaProduto($idProduto, $nomeProduto, $precoProduto , $descricaoProduto , $imagemProduto){

        if($imagemProduto == ""){
        $sql = "UPDATE produtos SET nomeProduto = '$nomeProduto' , descricaoProduto = '$descricaoProduto', precoProduto = '$precoProduto' WHERE produtos.ai_produto = $idProduto";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);
        }else{
            $sql = "UPDATE produtos SET nomeProduto = '$nomeProduto' , descricaoProduto = '$descricaoProduto', precoProduto = '$precoProduto' , imagemProduto = '$imagemProduto' WHERE produtos.ai_produto = $idProduto";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);
        }
        
    }

}

