<?php

namespace Source\Controller;

use Source\conexao\ConexaoDB;
use Source\Model\Produto;
use Source\Dao\ProdutoDAO;



class ProdutoController extends Produto
{
    private $produto;
    public function insereProduto(Produto $produto)
    {
        $conexao = new ConexaoDB();
        $this->$produto = $produto;
        $produtoDAO = new ProdutoDAO($conexao, $produto);
        $produtoDAO->salvar($produto);
        return "enviado com sucesso";
    }
    /**
     */
    function __construct()
    {
    }
}
