<?php

namespace Arch\Testing\DAO;

use Arch\Testing\Database\Connection;
use Arch\Testing\Model\ProdutoModel;

class ProdutoDAO
{
    public function __construct(ProdutoModel $produto)
    {
        try {
            $conexao = Connection::conectar();
            $stmt = $conexao->prepare("INSERT INTO teste VALUES (?)");
            $stmt->bindValue(1, $produto->getTeste());
            $stmt->execute();
        } catch (\Throwable $th) {
            echo "Deu pau";
        }
    }
}