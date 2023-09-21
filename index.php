<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO</h1>
    <hr>

    <h2>Assuntos Abordados: </h2>
    <ul>
        <li>Criação de clase</li>
    </ul>

    <?php
    // Importando a classe
        require_once "scr/Cliente.php";

    // Criando instancias da classe (objetos)
        $clienteA = new Cliente;
        $clienteB = new Cliente;
    ?>

    <pre><?=var_dump($clienteA,$clienteB)?></pre>
</body>
</html>