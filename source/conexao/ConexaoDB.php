<?php

namespace Source\conexao;

require_once('config.php');

class ConexaoDB
{

    private $host; //Normalmente localhost
    private $dbname; //O nome do seu banco de dados
    private $user; //Seu nome de usuario do banco de dados
    private $pass; //Sua senha de usuario do banco de dados
    //Construtor
    function __construct() //construtor, a cada Conexao criada deverá seguir o exemplo do construtor
    {
    
        $this->host = SERVIDOR;
        $this->dbname = NOME_BANCO;
        $this->user = USUARIO;
        $this->pass = SENHA;
    }

    public function conectar()
    { //É aqui que as coisas acontecem, realiza a conexão com o banco de dados
        try { //Caso esteja tudo OK, é por aqui que vai passar
           
            return new \PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->user,
                $this->pass


            );
        } catch (\PDOException $e) { //Trata possivel erros, você pode personalizar sua mensagem de erro, fique a vontade
            echo "Erro!<br>Mensagem: " . $e->getMessage() . "<br>Code: " . $e->getCode() . "<br>";
           
            exit;
        }
    }
}