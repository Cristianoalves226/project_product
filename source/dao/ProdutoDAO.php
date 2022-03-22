<?php

namespace Source\Dao;

use Source\conexao\ConexaoDB;
use Source\Model\Produto;


class ProdutoDAO extends Produto
{

    private $conexao ;
    private $produto;
    private $tabela = 'produto';


    public function __construct(ConexaoDB $conexao, Produto $produto) //recebe a conexao
    {
        $this->conexao= new ConexaoDB;
        $this->conexao = $conexao->conectar();
        $this->produto = $produto;

    }


    public function listar()
    { //lista todos os dados da tabela
       
        $query = "SELECT * FROM {$this->tabela}";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function salvar(Produto $produto)
    { //salva o produto na tabela, substituir nome e descricao pelos nomes de suas colunas no bando de dados
        $query = "INSERT INTO {$this->tabela} (`nome`, `descricao`) values (?, ?)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->produto->getNomeProduto());
        $stmt->bindValue(2, $this->produto->getEstoque());
        $stmt->execute();
        echo "chegou aqui dao";
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function atualizar($id)
    { //atualiza os dados do produto selecionado pelo id
        $query = "UPDATE {$this->tabela} SET nome = ?, descricao = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->produto->getNomeProduto());
        $stmt->bindValue(2, $this->produto->getEstoque());
        $stmt->bindValue(3, $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function deletar($id)
    { //deleta a linha da tabela do id selecionado
        $query = "DELETE FROM {$this->tabela} WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return 'Deletado com sucesso!';
    }

    public function procurar($id)
    { //procura o produto com respectivo id
        $query = "SELECT * FROM {$this->tabela} WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}