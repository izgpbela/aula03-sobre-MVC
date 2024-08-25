<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function getLivro(){
        $result = $this->mysqli->query("SELECT * FROM livros");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function pesquisaLivro($id){
        $result = $this->mysqli->query("SELECT * FROM livros WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function setLivro($nome,$autor,$quantidade,$preco,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO livros(`nome`,`autor`,`quantidade`,`preco`,`flag`,`data`)VALUES(?,?,?,?,?)");
        $stmt->bind_param($nome,$autor,$quantidade,$preco,$data);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function updateLivro($nome,$autor,$quantidade,$preco,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome`=?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?, `data`=? WHERE `nome`=?");
        $stmt->bind_param($nome,$autor,$quantidade,$preco,$data, $id);
        if( $stmt->execute() == TRUE ){
            return true;
        }else{
            return false;
        }
    }

    public function deleteLivros($id){
        if( $this->mysqli->query("DELETE FROM `livros` WHERE `NOME`= '".$id."';") == TRUE ){
            return true;
    }else {
        return false;
    }
}       
}
?>
