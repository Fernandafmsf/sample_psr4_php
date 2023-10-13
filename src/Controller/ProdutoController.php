<?php

namespace Arch\Testing\Controller;

use Arch\Testing\DAO\ProdutoDAO;
use Arch\Testing\Model\ProdutoModel;

class ProdutoController
{
    public function criarProduto(ProdutoModel $produto)
    {
        new ProdutoDAO($produto);
    }
}