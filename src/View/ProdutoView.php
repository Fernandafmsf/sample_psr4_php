<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <form method="post">
        <label>Nome</label>
        <input type="text" name="nome">
        <button type="submit" name="Enviar">Enviar</button>
    </form>
</body>

</html>

<?php

use Fernanda\SamplePsr4Php\Controller\ProdutoController;
use Fernanda\SamplePsr4Php\Model\ProdutoModel;

if (isset($_POST['Enviar'])) {
    $produto = new ProdutoModel;
    $produto->setNome($_POST['nome']); //enviando input pro ProdutoModel, vai definir como nome do objeto
    $produtoController = new ProdutoController;

    $produtoController->criarProduto($produto); 
}

?>