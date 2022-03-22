<?php

use Source\conexao\ConexaoDB;
use Source\Controller\ProdutoController;
use Source\Dao\ProdutoDAO;
use Source\Model\Produto;

require __DIR__ . "./vendor/autoload.php";


$pro = new Produto;
$conectct = new ConexaoDB();



$dao = new ProdutoDAO($conectct,$pro);
$imprime = $dao->listar();
print_r($imprime);
