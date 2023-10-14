<?php

namespace Fernanda\SamplePsr4Php\Controller;

use Fernanda\SamplePsr4Php\DAO\ProdutoDAO;
use Fernanda\SamplePsr4Php\Model\ProdutoModel;

class ProdutoController
{
    public function criarProduto(ProdutoModel $produto)
    {
        new ProdutoDAO($produto);
    }
}

if (isset($_POST['Enviar'])) {
    $produto = new ProdutoModel;
    $produto->setNome($_POST['nome']);
    $produtoController = new ProdutoController();
    $produtoController->criarProduto($produto);
}
