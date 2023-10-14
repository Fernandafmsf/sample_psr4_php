<?php

namespace Fernanda\SamplePsr4Php\Model;

class ProdutoModel
{
    public $nome;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
}
