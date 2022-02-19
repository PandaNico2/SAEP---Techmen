<?php

require 'Conexao.php';

class Login {
    
    /*Faz a conexão*/
    private $conexao;

    public function __construct(){

        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function listar(){

        $sql = 'SELECT * FROM login;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }
    /*Insere os dado*/
    public function inserir($usuario, $senha){
        $sql = 'insert into login (usuario, senha) values (?, ?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $usuario);
        $q->bindParam(2, $senha);

        $q->execute();

    }

    public function getLogin($id){

        $sql = 'select * from login where id = ?;';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $id);

        $q->execute();

        $Login = [];

        foreach ($q as $c){
            $Login = $c;
        }
        
        return $Login;
    }

    /*edita os dado*/
    public function editar($id, $usuario , $senha){

        $sql = 'update login set usuario = ?, senha = ? where id = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $usuario);
        $q->bindParam(2, $senha);
        $q->bindParam(3, $id);
        

        
        $q->execute();
    }

    /*deleta os dado*/
    public function eliminar($id) {
        $sql = "delete from login where id = ?";

        $q = $this->conexao->prepare($sql);
    
        $q->bindParam(1, $id);

        $q->execute();

    }

}