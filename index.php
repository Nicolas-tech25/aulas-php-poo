<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 04</h1>
    <hr>

    <h2>Assuntos Abordados: </h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visuabilidade</li>
    </ul>

    <?php 
        require_once "src/Cliente.php"; 
        $clienteA = new Cliente;
        /* $clienteA->nome = "Tiago "; */

        //usando o setter para atribuir um valor á propriedade privada "nome"
        $clienteA->setNome("Fulano da silva");
    ?>

    <!-- Acessando através do get -->
    <p>Nome: <?= $clienteA->getNome() ?></p>
    <pre><?= var_dump($clienteA) ?></pre>
</body>
</html>