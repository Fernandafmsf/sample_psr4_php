<?php

namespace Fernanda\SamplePsr4Php\DAO;

use Fernanda\SamplePsr4Php\Database\Connection;
use Fernanda\SamplePsr4Php\Model\ProdutoModel;

class ProdutoDAO
{
    public function __construct(ProdutoModel $produto)
    {
        try {
            $conexao = Connection::getConnection();
            $query="INSERT INTO teste VALUES (:nome)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(":nome", $produto->getNome());
            $stmt->execute();
        } catch (\Throwable $th) {
            echo "Deu pau" .$th->getMessage();
        }
    }
}