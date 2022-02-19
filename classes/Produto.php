<?php

require 'Conexao.php';

class Produto {
    
    /*Faz a conexão*/
    private $conexao;

    public function __construct(){

        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function listar(){

        $sql = 'SELECT * FROM produto;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }
    /*Insere os dado*/
    public function inserir($nome, $descricao){
        $sql = 'insert into produto (nome, descricao) values (?, ?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        $q->bindParam(2, $descricao);
        
        
        $q->execute();

    }

    public function getProduto($id){

        $sql = 'select * from produto where id = ?;';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $id);

        $q->execute();

        $Produto = [];

        foreach ($q as $c){
            $Produto = $c;
        }
        
        return $Produto;
    }

    /*edita os dado*/
    public function editar($id, $nome, $descricao){

        $sql = 'update produto set nome = ?, descricao = ? where id = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        $q->bindParam(2, $descricao);
        $q->bindParam(3, $id);
        
        $q->execute();
    }

    /*deleta os dado*/
    public function eliminar($id) {
        $sql = "delete from Produto where id = ?";

        $q = $this->conexao->prepare($sql);
    
        $q->bindParam(1, $id);

        $q->execute();

    }

}