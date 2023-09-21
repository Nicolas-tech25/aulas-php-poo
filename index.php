<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>

    <h2>Assuntos Abordados: </h2>
    <ul>
        <li>Acesso direto ás propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de método</li>
    </ul>

    <?php
    // Importando a classe
        require_once "src/Cliente.php";

    // Criando instancias da classe (objetos)
        $clienteA = new Cliente;
        $clienteB = new Cliente;

    // Acesso e atribuição

        /* Nome */
        $clienteA->nome = "Neymar";
        $clienteB->nome = "Pé de anjo";

        /* Telefones */
        $clienteA->telefones = [ "11-19411-2739", "11-4002-8922"];
        $clienteB->telefones = [ "11-98563-1236", "11-4683-7292"];

        /* Email */
        $clienteA->email = "realmeninoney.10@gmail.com";
        $clienteB->email = "pédeanjo.11@gmail.com";

        /* Senha */
        $clienteA->senha = password_hash("123ney", PASSWORD_DEFAULT);
        $clienteB->senha = password_hash("coringao2012", PASSWORD_DEFAULT);
    ?>

    <hr>

    <h2>Dados dos objetos</h2>
    <h3> <?= $clienteA->nome ?> </h3>
    <h3> <?= $clienteB->nome ?> </h3>

    <pre><?=var_dump($clienteA,$clienteB)?></pre>
</body>
</html>