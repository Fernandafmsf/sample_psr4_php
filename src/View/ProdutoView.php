<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <form method="post">
        <input type="text" name="teste" id="teste">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php

if (isset($_POST['teste'])) {
    $produto = new \Arch\Testing\Model\ProdutoModel($_POST['teste']);
    $produtoController = new \Arch\Testing\Controller\ProdutoController();
    $produtoController->criarProduto($produto);
}

?>