<?php

require 'Conexao.php';

class Cometario {
    
    /*Faz a conexão*/
    private $conexao;

    public function __construct(){

        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function listar(){

        $sql = 'SELECT * FROM cometario;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }
    /*Insere os dado*/
    public function inserir($conteudo , $data, $id_prod){
        $sql = 'insert into cometario (conteudo, data, id_prod) values (?, ?, ?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $conteudo);
        $q->bindParam(2, $data);
        $q->bindParam(3, $id_prod);

        $q->execute();

    }

    public function getCometario($id){

        $sql = 'select * from cometario where id = ?;';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $id);

        $q->execute();

        $Cometario = [];

        foreach ($q as $c){
            $Cometario = $c;
        }
        
        return $Cometario;
    }

    /*edita os dado*/
    public function editar($id, $conteudo , $data, $id_prod){

        $sql = 'update cometario set conteudo = ?, data = ?, id_prod = ? where id = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $conteudo);
        $q->bindParam(2, $data);
        $q->bindParam(3, $id_prod);
        $q->bindParam(4, $id);

        
        $q->execute();
    }

    /*deleta os dado*/
    public function eliminar($id) {
        $sql = "delete from cometario where id = ?";

        $q = $this->conexao->prepare($sql);
    
        $q->bindParam(1, $id);

        $q->execute();

    }

}