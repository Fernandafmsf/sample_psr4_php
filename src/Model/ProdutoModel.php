<?php

namespace Arch\Testing\Model;

class ProdutoModel
{
    private string $teste;

    public function __construct($atributo)
    {
        $this->teste = $atributo;
    }

    public function getTeste()
    {
        return $this->teste;
    }
}