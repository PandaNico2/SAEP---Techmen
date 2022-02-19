<?php

class Conexao {

    private $username;
    private $password;
    private $database;
    private $host;

    public function __construct() {
        $this->username = 'root';
        $this->password = '';
        $this->host = 'localhost';
        $this->database = 'banco';
    }

    public function getConexao($banco = 'sqlite') {

        if ($banco == 'mysql') {
            $con = $this->getConexaoMySql();
        } else {
            $con = $this->getConexaoSqlite();
        }

        return $con;

    }

    public function getConexaoMySql() {

        $dsnMysql = 'mysql:host='.$this->host.';dbname='.$this->database;

        $con = new \PDO($dsnMysql, $this->username, $this->password);

        return $con;

    }

    public function getConexaoSqlite() {

        $dsn = 'sqlite:./banco_de_dados/bancodb.db';

        $con = new \PDO($dsn);

        return $con;

    }

}